<?php

/**
 * Created by PhpStorm.
 * User: wcsan_000
 * Date: 20/06/2016
 * Time: 20:55
 */
class Pessoa
{
    /**
     * @var
     */
    private $nomePessoa;
    /**
     * @var
     */
    private $idade;

    public function correr($km)
    {
        echo '<br>' . $this->getNomePessoa() . ', aos ' . $this->getIdade() . ', correu!';
        for ($i = 0; $i <= $km; $i++) {
            echo '.';
        }
        echo 'E correu ' . $km . ' quilômetros';
    }

    public function __construct($nomePessoa, $idade)
    {
        echo '<br>' . 'Construtor';
        $this->setNomePessoa($nomePessoa);
        $this->setIdade($idade);
    }

    /**
     * @return mixed
     */
    public function getNomePessoa()
    {
        return $this->nomePessoa;
    }

    /**
     * @param mixed $nomePessoa
     */
    public function setNomePessoa($nomePessoa)
    {
        $this->nomePessoa = $nomePessoa;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }



}
?>