<?php
ob_start();
session_start();
/*include_once 'config/Database.php';
include_once 'config/Defs_Urls.php';
include_once 'config/instancia_dba.php';


    $test->update("DELETE FROM professor WHERE `usuario`.`id_usuario` =  ". $_GET['excluir'] ."; ");*/
require 'chat_con.php';
$id = filter_input(INPUT_POST, 'id');
$bi = filter_input(INPUT_POST, 'numero_bi');
$nome = filter_input(INPUT_POST, 'nome_completo');
$contacto = filter_input(INPUT_POST, 'texto_contacto');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');
$data = filter_input(INPUT_POST, 'data_nascimento');
$grau = filter_input(INPUT_POST, 'radio_grau');
$morada = filter_input(INPUT_POST, 'texto_morada');
if(isset($_POST['id']) && isset($_POST['numero_bi']) && isset($_POST['nome_completo']) && isset($_POST['texto_contacto']) && isset($_POST['email'])  && isset($_POST['senha'])  && isset($_POST['data_nascimento']) && isset($_POST['radio_grau'])  && isset($_POST['texto_morada'])){
            $get = mysqli_query($conn ," UPDATE usuario SET bi_usuario= '$bi', nome_completo= '$nome', contacto= '$contacto', data_nascimento= '$data' , email= '$email', senha= '$senha', grau= '$grau' , morada= '$morada' WHERE id_usuario = $id ");
            $_SESSION['nome'] = $_POST['nome_completo'];
            $_SESSION['mesagem_cadastro'] = "<center><h2>Olá! " . $_SESSION['nome'] . "<br>Usuario alterado com Sucesso.</h2></center>";
            session_write_close();
            header('location:msg_form_aceite_professor.php');
            exit();    
 }else {
    $_SESSION['mesagem_cadastro'] = "Cadastro não aceite, Verifique por favor o Formulario Preenchido! ";
    
    session_write_close();
    header('location:msg_form_nao_aceite_professor.php');
    exit();
}
?>