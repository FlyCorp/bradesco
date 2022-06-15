<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 05/11/20
 * Time: 15:42
 */

namespace FlyCorp\Bradesco\Entities;


use FlyCorp\Bradesco\Traits\Arrayble;

/**
 * Class Registro
 * @package FlyCorp\Bradesco\Entities
 */
class Registro
{
	use Arrayble;

	/**
	 * @var
	 */
	private $agencia_pagador;

	/**
	 * @var
	 */
	private $razao_conta_pagador;

	/**
	 * @var
	 */
	private $conta_pagador;

	/**
	 * @var
	 */
	private $controle_participante;

	/**
	 * @var
	 */
	private $qtde_dias_multa;

	/**
	 * @var
	 */
	private $aplicar_multa;

	/**
	 * @var
	 */
	private $valor_percentual_multa;

	/**
	 * @var
	 */
	private $valor_multa;

	/**
	 * @var
	 */
	private $valor_desconto_bonificacao;

	/**
	 * @var
	 */
	private $debito_automatico;

	/**
	 * @var
	 */
	private $rateio_credito;

	/**
	 * @var
	 */
	private $endereco_debito_automatico;

	/**
	 * @var
	 */
	private $tipo_ocorrencia;

	/**
	 * @var
	 */
	private $especie_titulo;

	/**
	 * @var
	 */
	private $primeira_instrucao;

	/**
	 * @var
	 */
	private $segunda_instrucao;

	/**
	 * @var
	 */
	private $qtde_dias_juros;

	/**
	 * @var
	 */
	private $valor_juros_mora;

	/**
	 * @var
	 */
	private $data_limite_desconto;

	/**
	 * @var
	 */
	private $valor_desconto;

	/**
	 * @var
	 */
	private $valor_iof;

	/**
	 * @var
	 */
	private $valor_abatimento;

	/**
	 * @var
	 */
	private $tipo_inscricao_pagador;

	/**
	 * @var
	 */
	private $sequencia_registro;

	/**
	 * @return mixed
	 */
	public function getAgenciaPagador()
	{
		return $this->agencia_pagador;
	}

	/**
	 * @param mixed $agencia_pagador
	 * @return Registro
	 */
	public function setAgenciaPagador($agencia_pagador)
	{
		$this->agencia_pagador = $agencia_pagador;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRazaoContaPagador()
	{
		return $this->razao_conta_pagador;
	}

	/**
	 * @param mixed $razao_conta_pagador
	 * @return Registro
	 */
	public function setRazaoContaPagador($razao_conta_pagador)
	{
		$this->razao_conta_pagador = $razao_conta_pagador;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getContaPagador()
	{
		return $this->conta_pagador;
	}

	/**
	 * @param mixed $conta_pagador
	 * @return Registro
	 */
	public function setContaPagador($conta_pagador)
	{
		$this->conta_pagador = $conta_pagador;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getControleParticipante()
	{
		return $this->controle_participante;
	}

	/**
	 * @param mixed $controle_participante
	 * @return Registro
	 */
	public function setControleParticipante($controle_participante)
	{
		$this->controle_participante = $controle_participante;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getQtdeDiasMulta()
	{
		return $this->qtde_dias_multa;
	}

	/**
	 * @param mixed $qtde_dias_multa
	 * @return Registro
	 */
	public function setQtdeDiasMulta($qtde_dias_multa)
	{
		$this->qtde_dias_multa = $qtde_dias_multa;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAplicarMulta()
	{
		return $this->aplicar_multa;
	}

	/**
	 * @param mixed $aplicar_multa
	 * @return Registro
	 */
	public function setAplicarMulta($aplicar_multa)
	{
		$this->aplicar_multa = $aplicar_multa;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorPercentualMulta()
	{
		return $this->valor_percentual_multa;
	}

	/**
	 * @param mixed $valor_percentual_multa
	 * @return Registro
	 */
	public function setValorPercentualMulta($valor_percentual_multa)
	{
		$this->valor_percentual_multa = $valor_percentual_multa;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorMulta()
	{
		return $this->valor_multa;
	}

	/**
	 * @param mixed $valor_multa
	 * @return Registro
	 */
	public function setValorMulta($valor_multa)
	{
		$this->valor_multa = $valor_multa;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorDescontoBonificacao()
	{
		return $this->valor_desconto_bonificacao;
	}

	/**
	 * @param mixed $valor_desconto_bonificacao
	 * @return Registro
	 */
	public function setValorDescontoBonificacao($valor_desconto_bonificacao)
	{
		$this->valor_desconto_bonificacao = $valor_desconto_bonificacao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDebitoAutomatico()
	{
		return $this->debito_automatico;
	}

	/**
	 * @param mixed $debito_automatico
	 * @return Registro
	 */
	public function setDebitoAutomatico($debito_automatico)
	{
		$this->debito_automatico = $debito_automatico;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRateioCredito()
	{
		return $this->rateio_credito;
	}

	/**
	 * @param mixed $rateio_credito
	 * @return Registro
	 */
	public function setRateioCredito($rateio_credito)
	{
		$this->rateio_credito = $rateio_credito;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEnderecoDebitoAutomatico()
	{
		return $this->endereco_debito_automatico;
	}

	/**
	 * @param mixed $endereco_debito_automatico
	 * @return Registro
	 */
	public function setEnderecoDebitoAutomatico($endereco_debito_automatico)
	{
		$this->endereco_debito_automatico = $endereco_debito_automatico;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTipoOcorrencia()
	{
		return $this->tipo_ocorrencia;
	}

	/**
	 * @param mixed $tipo_ocorrencia
	 * @return Registro
	 */
	public function setTipoOcorrencia($tipo_ocorrencia)
	{
		$this->tipo_ocorrencia = $tipo_ocorrencia;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEspecieTitulo()
	{
		return $this->especie_titulo;
	}

	/**
	 * @param mixed $especie_titulo
	 * @return Registro
	 */
	public function setEspecieTitulo($especie_titulo)
	{
		$this->especie_titulo = $especie_titulo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPrimeiraInstrucao()
	{
		return $this->primeira_instrucao;
	}

	/**
	 * @param mixed $primeira_instrucao
	 * @return Registro
	 */
	public function setPrimeiraInstrucao($primeira_instrucao)
	{
		$this->primeira_instrucao = $primeira_instrucao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSegundaInstrucao()
	{
		return $this->segunda_instrucao;
	}

	/**
	 * @param mixed $segunda_instrucao
	 * @return Registro
	 */
	public function setSegundaInstrucao($segunda_instrucao)
	{
		$this->segunda_instrucao = $segunda_instrucao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getQtdeDiasJuros()
	{
		return $this->qtde_dias_juros;
	}

	/**
	 * @param mixed $qtde_dias_juros
	 * @return Registro
	 */
	public function setQtdeDiasJuros($qtde_dias_juros)
	{
		$this->qtde_dias_juros = $qtde_dias_juros;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorJurosMora()
	{
		return $this->valor_juros_mora;
	}

	/**
	 * @param mixed $valor_juros_mora
	 * @return Registro
	 */
	public function setValorJurosMora($valor_juros_mora)
	{
		$this->valor_juros_mora = $valor_juros_mora;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataLimiteDesconto()
	{
		return $this->data_limite_desconto;
	}

	/**
	 * @param mixed $data_limite_desconto
	 * @return Registro
	 */
	public function setDataLimiteDesconto($data_limite_desconto)
	{
		$this->data_limite_desconto = $data_limite_desconto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorDesconto()
	{
		return $this->valor_desconto;
	}

	/**
	 * @param mixed $valor_desconto
	 * @return Registro
	 */
	public function setValorDesconto($valor_desconto)
	{
		$this->valor_desconto = $valor_desconto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorIof()
	{
		return $this->valor_iof;
	}

	/**
	 * @param mixed $valor_iof
	 * @return Registro
	 */
	public function setValorIof($valor_iof)
	{
		$this->valor_iof = $valor_iof;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorAbatimento()
	{
		return $this->valor_abatimento;
	}

	/**
	 * @param mixed $valor_abatimento
	 * @return Registro
	 */
	public function setValorAbatimento($valor_abatimento)
	{
		$this->valor_abatimento = $valor_abatimento;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTipoInscricaoPagador()
	{
		return $this->tipo_inscricao_pagador;
	}

	/**
	 * @param mixed $tipo_inscricao_pagador
	 * @return Registro
	 */
	public function setTipoInscricaoPagador($tipo_inscricao_pagador)
	{
		$this->tipo_inscricao_pagador = $tipo_inscricao_pagador;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSequenciaRegistro()
	{
		return $this->sequencia_registro;
	}

	/**
	 * @param mixed $sequencia_registro
	 * @return Registro
	 */
	public function setSequenciaRegistro($sequencia_registro)
	{
		$this->sequencia_registro = $sequencia_registro;
		return $this;
	}

}