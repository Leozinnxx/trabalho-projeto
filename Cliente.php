<?php
abstract class Cliente{
    private $nome;
    private $cpf;
    private $cel;

    function construct__($nome, $cpf, $cel)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setCel($cel);
    }

    pulbic function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getCel()
    {
        return $this->cel;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setCel($cel)
    {
        $this->cel = $cel;
    }
}