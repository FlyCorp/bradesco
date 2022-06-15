<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 08/08/20
 * Time: 17:40
 */

namespace FlyCorp\Bradesco;

use FlyCorp\Bradesco\Entities\Client;
use FlyCorp\Bradesco\Entities\Response;
use FlyCorp\Bradesco\Entities\Request;

/**
 * Class Billets
 * @package FlyCorp\Bradesco
 */
class Billets
{
	/**
	 * @var Client
	 */
	private $bradesco;

	/**
	 * Payments constructor.
	 */
	function __construct()
	{
		$this->bradesco = new Client();
	}

	/**
	 * @param Request $request
	 * @return Response
	 */
	public function generate(Request $request)
	{
		try {
			return $this->bradesco->generate($request);
		} catch (\Exception $e) {
			return (new Response())
				->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	/**
	 * @return Response
	 */
	public function getToken()
	{
		try {
			return $this->bradesco->token();
		} catch (\Exception $e) {
			return (new Response())
				->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	/**
	 * @param $token
	 * @param $orderId
	 * @return Response
	 */
	public function billet($token, $orderId)
	{
		try {
			return $this->bradesco->billet($token, $orderId);
		} catch (\Exception $e) {
			return (new Response())
				->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}
}