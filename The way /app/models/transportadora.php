<?php

require_once "conexao.php";

class usuario
{
    public $id; //chave primaria no BD
    public $razao_social;
    public $cnpj;
    public $email;
    public $telefone;
    public $login;
    public $senha;

    public function __construct($razao_social, $cnpj, $email, $telefone, $login, $senha, $id=null)
    {

        $this->id = $id;
        $this->razao_social = $razao_social;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->login = $login;
        $this->senha = $senha;
    }
}