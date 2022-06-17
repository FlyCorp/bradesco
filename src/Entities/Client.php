<?php
/**
 * Created by PhpStorm.
 * User: Railam Ribeiro
 * Date: 22/07/20
 * Time: 17:45
 */

namespace FlyCorp\Bradesco\Entities;

use FlyCorp\Bradesco\Entities\Request;

/**
 * Class Client
 * @package FlyCorp\Bradesco\Entities
 */
class Client extends Authentication
{
	/**
	 * @param Request $request
	 * @return Response
	 */
	public function generate(Request $request)
	{
		$endpoint = sprintf('payment.integrations.%s.create_endpoint', "bradesco");
		return $this->execute(sprintf('%s/transacao', config($endpoint)), 'POST', $request->toArray());
	}

	/**
	 * @return Response
	 */
	public function token()
	{
		$endpoint = sprintf('payment.integrations.%s.search_endpoint', "bradesco");
		$merchantId = sprintf('payment.integrations.%s.merchant_id', "bradesco");

		return $this->execute(sprintf('%s/Authentication/%s',
			config($endpoint),
			config($merchantId)
		), 'GET', [], true);
	}

	/**
	 * @param $token
	 * @param $orderId
	 * @return Response
	 */
	public function billet($token, $orderId)
	{
		$endpoint = sprintf('payment.integrations.%s.search_endpoint', "bradesco");
		$merchantId = sprintf('payment.integrations.%s.merchant_id', "bradesco");

		return $this->execute(sprintf('%s/GetOrderById/%s?token=%s&orderId=%s',
			config($endpoint),
			config($merchantId),
			$token,
			$orderId
		), 'GET', [], true);
	}
}