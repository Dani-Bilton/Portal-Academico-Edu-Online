<?php
ob_start();
include_once 'config/Database.php';
session_start();
include_once 'config/instancia_dba.php';
echo $_POST['nome_completo'] . "<br>";
echo $_POST['email'] . "<br>";
echo $_POST['data_nascimento'] . "<br>";
echo $_POST['numero_bi'] . "<br>";
echo $_POST['radio_sexo'] . "<br>";
echo $_POST['senha'] . "<br>";
echo $_POST['tipo'] . "<br>";
echo $_POST['texto_morada'] . "<br>";
echo $_POST['radio_grau'] . "<br>";
echo $_POST['texto_contacto'] . "<br>";
echo $_POST['curso'] . "<br>";
$string = "INSERT INTO 
			`usuario` 
			(
				`id_usuario`
				,`bi_usuario`
				,`nome_completo`	
				,`email`
				,`senha`
				,`adm`
				,`contacto`
				,`data_nascimento`
				,`genero` 
				,`morada`
				,`grau`
                ,`id_curso_usuario`
			) 
			VALUES 
			(
				NULL
				, '".$_POST['numero_bi'] ."'
				, '".$_POST['nome_completo'] ."'
                , '".$_POST['email'] ."'
				, '".$_POST['senha'] ."'
				, '".$_POST['tipo'] ."'
				, '".$_POST['texto_contacto'] ."'
				, '".$_POST['data_nascimento'] ."'
				, '".$_POST['radio_sexo'] ."'
				, '".$_POST['texto_morada'] ."'
				, '".$_POST['radio_grau'] ."'
                , '".$_POST['curso'] ."'
			)";

#echo $string;
$resultadoQuery = $test->insert($string);
$_SESSION['nome'] = $_POST['nome_completo'];
if (isset($resultadoQuery)) {
    $_SESSION['mesagem_cadastro'] = "<center><h2>Olá! " . $_SESSION['nome'] . "<br> Usuario Cadastrado com Sucesso.</h2></center>";
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