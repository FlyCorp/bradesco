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
 * Class Comprador
 * @package FlyCorp\Bradesco\Entities
 */
class Comprador
{
	use Arrayble;

	/**
	 * @var
	 */
	private $nome;

	/**
	 * @var
	 */
	private $documento;

	/**
	 * @var
	 */
	private $endereco;

	/**
	 * @var
	 */
	private $ip;

	/**
	 * @var
	 */
	private $user_agent;

	/**
	 * @return mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * @param mixed $nome
	 * @return Comprador
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDocumento()
	{
		return $this->documento;
	}

	/**
	 * @param mixed $documento
	 * @return Comprador
	 */
	public function setDocumento($documento)
	{
		$this->documento = $documento;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco()
	{
		return $this->endereco;
	}

	/**
	 * @param mixed $endereco
	 * @return Comprador
	 */
	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIp()
	{
		return $this->ip;
	}

	/**
	 * @param mixed $ip
	 * @return Comprador
	 */
	public function setIp($ip)
	{
		$this->ip = $ip;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUserAgent()
	{
		return $this->user_agent;
	}

	/**
	 * @param mixed $user_agent
	 * @return Comprador
	 */
	public function setUserAgent($user_agent)
	{
		$this->user_agent = $user_agent;
		return $this;
	}
}