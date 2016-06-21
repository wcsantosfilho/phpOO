<?php

class Produto
{
    public $nome;
    public $descricao;
    public $valor;
    public $estoque;


    public function baixaEstoque()
    {
        $this->estoque = $this->estoque - 1;
    }



}