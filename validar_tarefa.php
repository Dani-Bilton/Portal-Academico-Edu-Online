<?php 
include("chat_con.php");
$teste = [];
if(isset($_POST['submit']) && isset($_POST['descricao']) && isset($_POST['publicacao'])){
    session_start();
    $curso = $_SESSION['nor1'];
    $nome = $_SESSION['alu'];
    $descricao = $_POST['descricao'];
    $publicacao = $_POST['publicacao'];
    $arq = $_FILES['arquivo1']['name'];
    $destino = 'arquivos/'. $arq;
    $extensao = pathinfo($arq,PATHINFO_EXTENSION);
    $arq1 = $_FILES['arquivo1']['tmp_name'];
    $arq2 = $_FILES['arquivo1']['size'];
    if(!in_array($extensao,['zip','pdf','jpg','doc','png'])){
        echo
             "<script type=\"text/javascript\">
              alert(\"Podes adicionar apenas arquivo com as extensões zip, pdf, jpg, docx e png\");
              </script>";
        echo '<script type="text/javascript">window.location = "tarefa.php" </script>';
    } elseif($_FILES['arquivo1']['size'] > 10000000){
        echo 'Arquivo demasiado grande ';
    }
        else{
            if(move_uploaded_file($arq1,$destino)){
                $get = mysqli_query($conn ,"INSERT INTO tarefa SET nome_aluno ='$nome', descricao_tarefa= '$descricao', data_entrega= '$publicacao', arquivo ='$arq', tamanho ='$arq2', id_tarefa_curso= '$curso', estado = 'Pendente'");
                $_SESSION['mesagem_cadastro'] = "<center><h2>Olá! " . $_SESSION['descricao'] . "<br>Tarefa Cadastrada com Sucesso.</h2></center>";
                session_write_close();
                header('location:msg_form_aceite_aluno.php');
                exit();
                } else {
                    echo
                    "<script type=\"text/javascript\">
                         alert(\"Falha ao enviar\");
                    </script>";
                    echo '<script type="text/javascript">window.location = "cadastro_tarefa.php" </script>';
                }
         }
} else {
    $_SESSION['mesagem_cadastro'] = "Cadastro não aceite, Verifique por favor o Formulario Preenchido! ";
    session_write_close();
    header('location:msg_form_nao_aceite_aluno.php');
    exit();
}
?>
