<?php include("conecta.php");
include ("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"],$_POST["senha"]);
if($usuario == null){
    header("Location: index.php?login=0");
}else{
    setcookie("usuario_logado",$usuario["email"],time()+60); #vai ficar logado pelo tempo de agora mais 60 segundos
    header("Location: index.php?login=1");
}
die();
#var_dump($usuario);

