<?php 
include("chat_con.php");
$teste = [];
if(isset($_POST['submit']) && isset($_POST['descricao']) && isset($_POST['publicacao']) && isset($_POST['expiracao'])){
    session_start();
    $curso = $_SESSION['nor1'];
    $descricao = $_POST['descricao'];
    $publicacao = $_POST['publicacao'];
    $expiracao = $_POST['expiracao'];
    $arq = $_FILES['arquivo1']['name'];
    $destino = 'arquivos/'. $arq;
    $extensao = pathinfo($arq,PATHINFO_EXTENSION);
    $arq1 = $_FILES['arquivo1']['tmp_name'];
    $arq2 = $_FILES['arquivo1']['size'];
    if(!in_array($extensao,['zip','pdf','jpg','doc','png'])){
        echo
             "<script type=\"text/javascript\">
              alert(\"Podes adicionar apenas arquivo com as extensões zip, pdf, jpg, doc e png\");
              </script>";
        echo '<script type="text/javascript">window.location = "programa.php" </script>';
    } elseif($_FILES['arquivo1']['size'] > 10000000){
        echo 'Arquivo demasiado grande ';
    }
        else{
            if(move_uploaded_file($arq1,$destino)){
                $get = mysqli_query($conn ,"INSERT INTO programa SET descricao= '$descricao', data_desponibilidade= '$publicacao', data_expiracao= '$expiracao', arquivo ='$arq', tamanho ='$arq2', id_prog_curso= '$curso', total = 0 ");
                $_SESSION['mesagem_cadastro'] = "<center><h2>Olá! " . $_SESSION['descricao'] . "<br>Programa Cadastrado com Sucesso.</h2></center>";
                session_write_close();
                header('location:msg_form_aceite_professor.php');
                exit();
                } else {
                    echo
                    "<script type=\"text/javascript\">
                         alert(\"Falha ao enviar\");
                    </script>";
                    echo '<script type="text/javascript">window.location = "cadastro_programa.php" </script>';
                }
         }
} else {
    $_SESSION['mesagem_cadastro'] = "Cadastro não aceite, Verifique por favor o Formulario Preenchido! ";
    session_write_close();
    header('location:msg_form_nao_aceite_professor.php');
    exit();
}
?>
