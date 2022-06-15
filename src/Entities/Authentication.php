<?php
/**
 * Created by PhpStorm.
 * User: Matheus Hack
 * Date: 22/07/20
 * Time: 17:45
 */

namespace FlyCorp\Bradesco\Entities;

use App\Modules\Payment\Constants\PaymentIntegrations;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Class Authentication
 * @package FlyCorp\Bradesco\Entities
 */
class Authentication
{
	/**
	 * @var Client
	 */
	private $httpClient;

	/**
	 * Authentication constructor.
	 */
	public function __construct()
	{
		$this->httpClient = new Client();
	}

	/**
	 * @param $endpoint
	 * @param string $method
	 * @param array $parameters
	 * @param bool $isMultipart
	 * @return Response
	 */
	protected function execute($endpoint, $method = 'GET', $parameters = [], $isUser = false)
	{
		try {
			$content = $this->makeContent($parameters, $isUser);

			switch ($method) {
				default:
					$response = $this->httpClient->request('GET', $endpoint, $content);
					break;
				case 'POST':
					$response = $this->httpClient->request('POST', $endpoint, $content);
					break;
				case 'PUT':
					$response = $this->httpClient->request('PUT', $endpoint, $content);
					break;
				case 'PATCH':
					$response = $this->httpClient->request('PATCH', $endpoint, $content);
					break;
			}

			$response = json_decode($response->getBody());

			if (!empty($response->Error)) {
				throw new Exception($response->Error);
			}

			return (new Response)
				->setSuccess(true)
				->setData($response);
		} catch (RequestException $e) {
			return (new Response)
				->setSuccess(false)
				->setMessage($e->getMessage());
		} catch (Exception $e) {
			return (new Response)
				->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	/**
	 * @param $parameters
	 * @param $isMultipart
	 * @return array
	 */
	private function makeContent($parameters, $isUser)
	{
		if ($isUser) {
			return [
				"headers" => [
					'Content-Type' => 'application/json',
					'Authorization' => sprintf('Basic %s', base64_encode(
						sprintf('%s:%s',
							config(sprintf('payment.integrations.%s.user', PaymentIntegrations::BRADESCO)),
							config(sprintf('payment.integrations.%s.secret_key', PaymentIntegrations::BRADESCO))
						)
					))
				],
			];
		}

		return [
			"headers" => [
				'Content-Type' => 'application/json',
				'Authorization' => sprintf('Basic %s', base64_encode(
					sprintf('%s:%s',
						config(sprintf('payment.integrations.%s.merchant_id', PaymentIntegrations::BRADESCO)),
						config(sprintf('payment.integrations.%s.secret_key', PaymentIntegrations::BRADESCO))
					)
				))
			],
			'body' => !empty($parameters) ? json_encode($parameters) : ''
		];
	}
}