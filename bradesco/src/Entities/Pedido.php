<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 08/08/20
 * Time: 18:00
 */

namespace FlyCorp\Bradesco\Entities;


use FlyCorp\Bradesco\Traits\Arrayble;

/**
 * Class Pedido
 * @package FlyCorp\Bradesco\Entities
 */
class Pedido
{
	use Arrayble;

	/**
	 * @var
	 */
	private $numero;

	/**
	 * @var
	 */
	private $valor;

	/**
	 * @var
	 */
	private $descricao;

	/**
	 * @return mixed
	 */
	public function getNumero()
	{
		return $this->numero;
	}

	/**
	 * @param mixed $numero
	 * @return Pedido
	 */
	public function setNumero($numero)
	{
		$this->numero = $numero;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValor()
	{
		return $this->valor;
	}

	/**
	 * @param mixed $valor
	 * @return Pedido
	 */
	public function setValor($valor)
	{
		$this->valor = $valor;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDescricao()
	{
		return $this->descricao;
	}

	/**
	 * @param mixed $descricao
	 * @return Pedido
	 */
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
		return $this;
	}
}