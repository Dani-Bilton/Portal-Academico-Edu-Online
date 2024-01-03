<?php

require 'chat_con.php';
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$contacto = filter_input(INPUT_POST, 'contacto');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$data = filter_input(INPUT_POST, 'nascimento');
$cidade = filter_input(INPUT_POST, 'cidade');
$morada = filter_input(INPUT_POST, 'morada');
if(isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['contacto']) && isset($_POST['email']) && isset($_POST['nascimento']) && isset($_POST['cidade']) && isset($_POST['morada'])){
    $get = mysqli_query($conn ," UPDATE teste SET nome= '$nome', contacto= '$contacto', email= '$email', data1 ='$data', cidade= '$cidade', morada= '$morada' WHERE id_teste = $id ");
   echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/validar_edicao.php'>'
    <script type=\"text/javascript\">
        alert(\"Editado com Sucesso\");
    </script>";
    echo '<script type="text/javascript">window.location = "editar.php" </script>';
    exit;
} else {
    echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/validar_edicao.php'>'
    <script type=\"text/javascript\">
        alert(\"Erro na Edição\");
    </script>";
    echo '<script type="text/javascript">window.location = "editar.php" </script>';
    exit;
}

?>