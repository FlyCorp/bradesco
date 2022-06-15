<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 08/08/20
 * Time: 17:45
 */

namespace FlyCorp\Bradesco\Entities;

use FlyCorp\Bradesco\Traits\Arrayble;

/**
 * Class Request
 * @package FlyCorp\Bradesco\Entities
 */
class Request
{
	use Arrayble;

	/**
	 * @var
	 */
	private $merchant_id;

	/**
	 * @var int
	 */
	private $meio_pagamento = 300;

	/**
	 * @var
	 */
	private $pedido;

	/**
	 * @var
	 */
	private $comprador;

	/**
	 * @var
	 */
	private $boleto;

	/**
	 * @var
	 */
	private $token_request_confirmacao_pagamento;

	/**
	 * @return mixed
	 */
	public function getMerchantId()
	{
		return $this->merchant_id;
	}

	/**
	 * @param mixed $merchant_id
	 * @return Request
	 */
	public function setMerchantId($merchant_id)
	{
		$this->merchant_id = $merchant_id;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getMeioPagamento(): int
	{
		return $this->meio_pagamento;
	}

	/**
	 * @param int $meio_pagamento
	 * @return Request
	 */
	public function setMeioPagamento(int $meio_pagamento): Request
	{
		$this->meio_pagamento = $meio_pagamento;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPedido()
	{
		return $this->pedido;
	}

	/**
	 * @param mixed $pedido
	 * @return Request
	 */
	public function setPedido($pedido)
	{
		$this->pedido = $pedido;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getComprador()
	{
		return $this->comprador;
	}

	/**
	 * @param mixed $comprador
	 * @return Request
	 */
	public function setComprador($comprador)
	{
		$this->comprador = $comprador;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBoleto()
	{
		return $this->boleto;
	}

	/**
	 * @param mixed $boleto
	 * @return Request
	 */
	public function setBoleto($boleto)
	{
		$this->boleto = $boleto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTokenRequestConfirmacaoPagamento()
	{
		return $this->token_request_confirmacao_pagamento;
	}

	/**
	 * @param mixed $token_request_confirmacao_pagamento
	 * @return Request
	 */
	public function setTokenRequestConfirmacaoPagamento($token_request_confirmacao_pagamento)
	{
		$this->token_request_confirmacao_pagamento = $token_request_confirmacao_pagamento;
		return $this;
	}
}