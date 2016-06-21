<?php

class Produto
{
    public $nome;
    public $descricao;
    public $valor;
    public $estoque;

    /**
     * Produto constructor.
     * @param $nome
     * @param $descricao
     * @param $valor
     * @param $estoque
     */
    public function __construct($nome, $descricao, $valor, $estoque)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->estoque = $estoque;
    }


    public function baixaEstoque()
    {
        $this->estoque = $this->estoque - 1;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
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
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * @param mixed $estoque
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }


}