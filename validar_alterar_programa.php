<?php
ob_start();
session_start();
/*include_once 'config/Database.php';
include_once 'config/Defs_Urls.php';
include_once 'config/instancia_dba.php';


    $test->update("DELETE FROM professor WHERE `usuario`.`id_usuario` =  ". $_GET['excluir'] ."; ");*/
require 'chat_con.php';
$id = filter_input(INPUT_POST, 'id');
$publicacao = filter_input(INPUT_POST, 'publicacao');
$descricao = filter_input(INPUT_POST, 'descricao');
$expiracao = filter_input(INPUT_POST, 'expiracao');
$arq = $_FILES['arquivo1']['name'];
$destino = 'arquivos/'. $arq;
$extensao = pathinfo($arq,PATHINFO_EXTENSION);
$arq1 = $_FILES['arquivo1']['tmp_name'];
$arq2 = $_FILES['arquivo1']['size'];
if(isset($_POST['id']) && isset($_POST['descricao']) && isset($_POST['publicacao']) && isset($_POST['expiracao'])){
    if(!in_array($extensao,['zip','pdf','jpg','doc','png','mp4'])){
        echo
             "<script type=\"text/javascript\">
              alert(\"Podes adicionar apenas arquivo com as extensões zip, pdf, jpg, doc, mp4 e png\");
              </script>";
        echo '<script type="text/javascript">window.location = "alterar_programa.php" </script>';
    }elseif($_FILES['arquivo1']['size'] > 10000000){
        echo 'Arquivo demasiado grande ';
        echo '<script type="text/javascript">window.location = "alterar_programa.php" </script>';
    }
            $get = mysqli_query($conn ," UPDATE programa SET descricao= '$descricao', data_desponibilidade= '$publicacao', data_expiracao= '$expiracao', tamanho= '$arq2', arquivo ='$arq' WHERE id_curso = $id ");
            $_SESSION['nome'] = $_POST['descricao'];
            $_SESSION['mesagem_cadastro'] = "<center><h2>Olá! " . $_SESSION['nome'] . "<br>Programa alterado com Sucesso.</h2></center>";
            session_write_close();
            header('location:msg_form_aceite_professor.php');
            exit();    
 }else {
    $_SESSION['mesagem_cadastro'] = "Edição não aceite, Verifique por favor o Formulario Preenchido! ";
    
    session_write_close();
    header('location:msg_form_nao_aceite_professor.php');
    exit();
}
?>