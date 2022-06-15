<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 08/08/20
 * Time: 18:04
 */

namespace FlyCorp\Bradesco\Entities;


use FlyCorp\Bradesco\Traits\Arrayble;

/**
 * Class Instrucoes
 * @package FlyCorp\Bradesco\Entities
 */
class Instrucoes
{
	use Arrayble;

	/**
	 * @var
	 */
	private $instrucao_linha_1;

	/**
	 * @var
	 */
	private $instrucao_linha_2;

	/**
	 * @var
	 */
	private $instrucao_linha_3;

	/**
	 * @return mixed
	 */
	public function getInstrucaoLinha1()
	{
		return $this->instrucao_linha_1;
	}

	/**
	 * @param mixed $instrucao_linha_1
	 * @return Instrucoes
	 */
	public function setInstrucaoLinha1($instrucao_linha_1)
	{
		$this->instrucao_linha_1 = $instrucao_linha_1;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getInstrucaoLinha2()
	{
		return $this->instrucao_linha_2;
	}

	/**
	 * @param mixed $instrucao_linha_2
	 * @return Instrucoes
	 */
	public function setInstrucaoLinha2($instrucao_linha_2)
	{
		$this->instrucao_linha_2 = $instrucao_linha_2;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getInstrucaoLinha3()
	{
		return $this->instrucao_linha_3;
	}

	/**
	 * @param mixed $instrucao_linha_3
	 * @return Instrucoes
	 */
	public function setInstrucaoLinha3($instrucao_linha_3)
	{
		$this->instrucao_linha_3 = $instrucao_linha_3;
		return $this;
	}
}