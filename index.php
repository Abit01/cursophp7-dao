<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//$root = new Usuario();
//carrega um usuario
//$root->loadById(1);

//tras a lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuario buscando pelo login
//$search = Usuario::search("andre");

//echo json_encode($search);

//CARREGA UM USUARIO USANDO LOGIN E SENHA
$usuario = new Usuario();

$usuario->login("andre","12345");

echo $usuario;
 ?>