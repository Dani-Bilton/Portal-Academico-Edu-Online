<?php
ob_start();
session_start();
/*include_once 'config/Database.php';
include_once 'config/Defs_Urls.php';
include_once 'config/instancia_dba.php';


    $test->update("DELETE FROM professor WHERE `usuario`.`id_usuario` =  ". $_GET['excluir'] ."; ");*/
require 'chat_con.php';
$id = filter_input(INPUT_POST, 'id');
$descricao = filter_input(INPUT_POST, 'descricao');
$carga = filter_input(INPUT_POST, 'carga');
$inicio = filter_input(INPUT_POST, 'inicio');
$fim = filter_input(INPUT_POST, 'fim');
if(isset($_POST['id']) && isset($_POST['descricao']) && isset($_POST['carga']) && isset($_POST['inicio']) && isset($_POST['inicio'])){
            $get = mysqli_query($conn ," UPDATE curso SET descricao= '$descricao', carga= '$carga', Inicio= '$inicio', Fim= '$fim' WHERE id_curso = $id ");
            $_SESSION['nome'] = $_POST['descricao'];
            $_SESSION['mesagem_cadastro'] = "<center><h2>Olá! " . $_SESSION['nome'] . "<br>Curso alterado com Sucesso.</h2></center>";
            session_write_close();
            header('location:msg_form_aceite.php');
            exit();    
 }else {
    $_SESSION['mesagem_cadastro'] = "Edição não aceite, Verifique por favor o Formulario Preenchido! ";
    
    session_write_close();
    header('location:msg_form_nao_aceite.php');
    exit();
}
?>