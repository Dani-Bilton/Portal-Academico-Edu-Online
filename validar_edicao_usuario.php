<?php
session_start();
$nivel = $_SESSION['nor3'];
require 'chat_con.php';
$id = filter_input(INPUT_POST, 'id');
$bi = filter_input(INPUT_POST, 'bi');
$nome = filter_input(INPUT_POST, 'nome');
$contacto = filter_input(INPUT_POST, 'contacto');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');
$data = filter_input(INPUT_POST, 'nascimento');
$grau = filter_input(INPUT_POST, 'grau');
$morada = filter_input(INPUT_POST, 'morada');
$curso = filter_input(INPUT_POST, 'curso');
if(isset($_POST['id']) && isset($_POST['bi']) && isset($_POST['nome']) && isset($_POST['contacto']) && isset($_POST['email'])  && isset($_POST['email']) && isset($_POST['senha'])  && isset($_POST['nascimento']) && isset($_POST['grau'])  && isset($_POST['morada'])  && isset($_POST['curso'])){
            $get = mysqli_query($conn ," UPDATE usuario SET bi_usuario= '$bi', nome_completo= '$nome', contacto= '$contacto', data_nascimento= '$data' , email= '$email', senha= '$senha', grau= '$grau' , morada= '$morada', id_curso_usuario= '$curso' WHERE id_usuario = $id ");
            echo
            "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/validar_edicao.php'>'
            <script type=\"text/javascript\">
                alert(\"Editado com Sucesso\");
            </script>";
            if($nivel == 1){
                echo '<script type="text/javascript">window.location = "usuario.php" </script>';
            exit;
            } else {
                echo '<script type="text/javascript">window.location = "conta.php" </script>';
            }
            
 }else {
    echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/usuario.php'>'
    <script type=\"text/javascript\">
        alert(\"Dados Inseridos de modo Incorreto\");
    </script>";
    echo '<script type="text/javascript">window.location = "usuario.php" </script>';
    exit;
}
?>