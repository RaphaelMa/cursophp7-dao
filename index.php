<?php 

require_once("config.php");

//Carrega apenas um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuario buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "123544"); 
//echo $usuario;


$aluno = new Usuario("aluno", "@alun0");

$aluno->insert();

echo $aluno;

?>