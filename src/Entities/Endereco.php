<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 08/08/20
 * Time: 18:01
 */

namespace FlyCorp\Bradesco\Entities;


use FlyCorp\Bradesco\Traits\Arrayble;

/**
 * Class Endereco
 * @package FlyCorp\Bradesco\Entities
 */
class Endereco
{
	use Arrayble;

	/**
	 * @var
	 */
	private $cep;

	/**
	 * @var
	 */
	private $logradouro;

	/**
	 * @var
	 */
	private $numero;

	/**
	 * @var
	 */
	private $complemento;

	/**
	 * @var
	 */
	private $bairro;

	/**
	 * @var
	 */
	private $cidade;

	/**
	 * @var
	 */
	private $uf;

	/**
	 * @return mixed
	 */
	public function getCep()
	{
		return $this->cep;
	}

	/**
	 * @param mixed $cep
	 * @return Endereco
	 */
	public function setCep($cep)
	{
		$this->cep = $cep;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLogradouro()
	{
		return $this->logradouro;
	}

	/**
	 * @param mixed $logradouro
	 * @return Endereco
	 */
	public function setLogradouro($logradouro)
	{
		$this->logradouro = $logradouro;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumero()
	{
		return $this->numero;
	}

	/**
	 * @param mixed $numero
	 * @return Endereco
	 */
	public function setNumero($numero)
	{
		$this->numero = $numero;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getComplemento()
	{
		return $this->complemento;
	}

	/**
	 * @param mixed $complemento
	 * @return Endereco
	 */
	public function setComplemento($complemento)
	{
		$this->complemento = $complemento;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBairro()
	{
		return $this->bairro;
	}

	/**
	 * @param mixed $bairro
	 * @return Endereco
	 */
	public function setBairro($bairro)
	{
		$this->bairro = $bairro;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCidade()
	{
		return $this->cidade;
	}

	/**
	 * @param mixed $cidade
	 * @return Endereco
	 */
	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUf()
	{
		return $this->uf;
	}

	/**
	 * @param mixed $uf
	 * @return Endereco
	 */
	public function setUf($uf)
	{
		$this->uf = $uf;
		return $this;
	}
}