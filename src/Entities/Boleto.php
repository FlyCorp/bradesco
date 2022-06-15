<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 08/08/20
 * Time: 18:03
 */

namespace FlyCorp\Bradesco\Entities;


use FlyCorp\Bradesco\Traits\Arrayble;

/**
 * Class Boleto
 * @package FlyCorp\Bradesco\Entities
 */
class Boleto
{
	use Arrayble;

	/**
	 * @var
	 */
	private $beneficiario;

	/**
	 * @var
	 */
	private $carteira;

	/**
	 * @var
	 */
	private $nosso_numero;

	/**
	 * @var
	 */
	private $data_emissao;

	/**
	 * @var
	 */
	private $data_vencimento;

	/**
	 * @var
	 */
	private $valor_titulo;

	/**
	 * @var
	 */
	private $url_logotipo;

	/**
	 * @var
	 */
	private $mensagem_cabecalho;

	/**
	 * @var
	 */
	private $tipo_renderizacao = 2;

	/**
	 * @var
	 */
	private $instrucoes;

	/**
	 * @var
	 */
	private $registro;

	/**
	 * @return mixed
	 */
	public function getBeneficiario()
	{
		return $this->beneficiario;
	}

	/**
	 * @param mixed $beneficiario
	 * @return Boleto
	 */
	public function setBeneficiario($beneficiario)
	{
		$this->beneficiario = $beneficiario;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCarteira()
	{
		return $this->carteira;
	}

	/**
	 * @param mixed $carteira
	 * @return Boleto
	 */
	public function setCarteira($carteira)
	{
		$this->carteira = $carteira;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNossoNumero()
	{
		return $this->nosso_numero;
	}

	/**
	 * @param mixed $nosso_numero
	 * @return Boleto
	 */
	public function setNossoNumero($nosso_numero)
	{
		$this->nosso_numero = $nosso_numero;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataEmissao()
	{
		return $this->data_emissao;
	}

	/**
	 * @param mixed $data_emissao
	 * @return Boleto
	 */
	public function setDataEmissao($data_emissao)
	{
		$this->data_emissao = $data_emissao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataVencimento()
	{
		return $this->data_vencimento;
	}

	/**
	 * @param mixed $data_vencimento
	 * @return Boleto
	 */
	public function setDataVencimento($data_vencimento)
	{
		$this->data_vencimento = $data_vencimento;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorTitulo()
	{
		return $this->valor_titulo;
	}

	/**
	 * @param mixed $valor_titulo
	 * @return Boleto
	 */
	public function setValorTitulo($valor_titulo)
	{
		$this->valor_titulo = $valor_titulo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUrlLogotipo()
	{
		return $this->url_logotipo;
	}

	/**
	 * @param mixed $url_logotipo
	 * @return Boleto
	 */
	public function setUrlLogotipo($url_logotipo)
	{
		$this->url_logotipo = $url_logotipo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMensagemCabecalho()
	{
		return $this->mensagem_cabecalho;
	}

	/**
	 * @param mixed $mensagem_cabecalho
	 * @return Boleto
	 */
	public function setMensagemCabecalho($mensagem_cabecalho)
	{
		$this->mensagem_cabecalho = $mensagem_cabecalho;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTipoRenderizacao()
	{
		return $this->tipo_renderizacao;
	}

	/**
	 * @param mixed $tipo_renderizacao
	 * @return Boleto
	 */
	public function setTipoRenderizacao($tipo_renderizacao)
	{
		$this->tipo_renderizacao = $tipo_renderizacao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getInstrucoes()
	{
		return $this->instrucoes;
	}

	/**
	 * @param mixed $instrucoes
	 * @return Boleto
	 */
	public function setInstrucoes($instrucoes)
	{
		$this->instrucoes = $instrucoes;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRegistro()
	{
		return $this->registro;
	}

	/**
	 * @param mixed $registro
	 * @return Boleto
	 */
	public function setRegistro($registro)
	{
		$this->registro = $registro;
		return $this;
	}
}