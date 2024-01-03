<?php
ob_start();
include_once 'config/Database.php';
session_start();
include_once 'config/instancia_dba.php';

echo $_POST['descricao'] . "<br>";
echo $_POST['carga'] . "<br>";
echo $_POST['inicio'] . "<br>";
echo $_POST['fim'] . "<br>";


$string = "INSERT INTO 
			`curso` 
			(
				`id_curso`
				,`descricao`
				,`carga`
				,`inicio`
				,`fim`
			) 
			VALUES 
			(
				NULL
				, '". $_POST['descricao'] ."'
				, '". $_POST['carga'] ."'
				, '". $_POST['inicio'] ."'
				, '".$_POST['fim'] ."'
			)";
#echo $string;
$resultadoQuery = $test->insert($string);
$_SESSION['nome'] = $_POST['nome_completo'];
if (isset($resultadoQuery)) {
    $_SESSION['mesagem_cadastro'] = "<center><h2>Olá! " . $_SESSION['nome'] . "<br>Curso Cadastrado com Sucesso.</h2></center>";
    session_write_close();
    header('location:msg_form_aceite.php');
    exit();
} else {
    $_SESSION['mesagem_cadastro'] = "Cadastro não aceite, Verifique por favor o Formulario Preenchido! ";
    
    session_write_close();
    header('location:msg_form_nao_aceite.php');
    exit();
}
?>