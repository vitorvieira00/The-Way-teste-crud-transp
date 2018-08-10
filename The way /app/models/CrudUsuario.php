<?php

 require_once "conexao.php";

 require_once "usuario.php";

class Crudusuario{

    private $conexao;
    public  $caminhoneiro;
    public  $transportadora;

    //CONEXÃO COM O BANCO
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    //Cadastra o usuario
    public function salvar(usuario $caminhoneiro){

        $sql = "INSERT INTO caminhoneiro (nome, email, telefone, senha, rg, cpf, num_antt, num_cnh, categoria_cnh, cod_usuario) 
                VALUES ({$caminhoneiro->nome}, {$caminhoneiro->sobrenome}, {$caminhoneiro->email}, {$caminhoneiro->telefone}, {$caminhoneiro->senha}, {$caminhoneiro->rg}, {$caminhoneiro->cpf}, {$caminhoneiro->num_antt}, {$caminhoneiro->num_cnh}, {$caminhoneiro->categoria_cnh})";

        $this->conexao->exec($sql);
    }


    //Busca
    public function getusuario(int $cod_usuario)
    {
        $consultausuarios->conexao->query("SELECT * FROM caminhoneiro WHERE cod_usuario = $cod_usuario");
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
        return new usuario($usuario['nome'], $usuario['email'], $usuario['telefone'], $usuario['senha'], $usuario['rg'], $usuario['cpf'], $usuario['num_cnh']);
    }

    public function getusuarios(){
        $consulta = $this->conexao->query("SELECT * FROM usuarios");
        $arrayusuarios = $consulta->fetchAll(usuarioTCH_ASSOC);

    //Fabrica de usuario
        $listausuario = [];
        foreach ($arrayusuarios as $usuarusuario  $listausuario[] = new usuario($usuarios['nome'], $usuarios['sobrenome'], $usuarios['email'],$usuarios['quantidade_telefone'], $usuarios['cod_usuario']){
        }
        return usuariosuarios;
    }

    //Exclui o usuario
    public function excluirusuario(int $x)
    {
        $this->conexao->exec("DELETE from caminhoneiro where cod_usuario = $x"usuario}

    //Edita as informações do usuario
    public function editar($id, $nome, $email, $sobrenome, $telefone)
    {
        $this->conexao->exec("UPDATE caminhoneiro SET nome = $nome, email = $email, sobrenome =usuarionome, telefone = $telefone WHERE usuario.cod_usuario = $id; ");
    }

    public function login($usuario, $senha){
        $consultausuarios->conexao->query("SELECT * FROM usuario WHERE cod_usuario = $cod_usuario");
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
        return new usuario($usuario['nome'], $usuario['sobrenome'], $usuario['email'], $usuario['cod_usuario']);

    }
    //---------------------------------------------------------------------------------------------------------
}

  public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    //Cadastra o usuario
    public function salvar(usuario $transportadora){

        $sql = "INSERT INTO transportadora (razao_social, cnpj, email, telefone, senha,cod_usuario) 
                VALUES ({$transportadora->razao_social}, {$transportadora->cnpj}, {$transportadora->email}, {$transportadora->telefone}, {$transportadora->senha}})";

        $this->conexao->exec($sql);
    }


    //Busca
    public function getusuario(int $cod_usuario)
    {
        $consultausuarios->conexao->query("SELECT * FROM transportadora WHERE cod_usuario = $cod_usuario");
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
        return new usuario($usuario['nome'], $usuario['email'], $usuario['telefone'], $usuario['senha'];
    }

    public function getusuarios(){
        $consulta = $this->conexao->query("SELECT * FROM usuarios");
        $arrayusuarios = $consulta->fetchAll(usuarioTCH_ASSOC);

    //Fabrica de usuario
        $listausuario = [];
        foreach ($arrayusuarios as $usuarusuario  $listausuario[] = new usuario($usuarios['razao_social'],$usuarios['quantidade_telefone'], $usuarios['cod_usuario']){
        }
        return usuariosuarios;
    }

    //Exclui o usuario
    public function excluirusuario(int $x)
    {
        $this->conexao->exec("DELETE from caminhoneiro where cod_usuario = $x"usuario}

    //Edita as informações do usuario
    public function editar($id, $nome, $email, $sobrenome, $telefone)
    {
        $this->conexao->exec("UPDATE caminhoneiro SET nome = $nome, email = $email, sobrenome =usuarionome, telefone = $telefone WHERE usuario.cod_usuario = $id; ");
    }

    public function login($usuario, $senha){
        $consultausuarios->conexao->query("SELECT * FROM usuario WHERE cod_usuario = $cod_usuario");
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
        return new usuario($usuario['nome'], $usuario['sobrenome'], $usuario['email'], $usuario['cod_usuario']);

    }

}



