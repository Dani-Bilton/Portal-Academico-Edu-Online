<?php

require 'chat_con.php';
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'descricao');
$contacto = filter_input(INPUT_POST, 'carga');
$data = filter_input(INPUT_POST, 'nascimento');
$cidade = filter_input(INPUT_POST, 'nascimento1');
if(isset($_POST['id']) && isset($_POST['descricao']) && isset($_POST['carga']) && isset($_POST['nascimento']) && isset($_POST['nascimento1'])){
    $get = mysqli_query($conn ," UPDATE curso SET descricao= '$nome', carga= '$contacto', Inicio= '$data', Fim ='$cidade' WHERE id_curso = $id ");
   echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/validar_edicao.php'>'
    <script type=\"text/javascript\">
        alert(\"Editado com Sucesso\");
    </script>";
    echo '<script type="text/javascript">window.location = "curso.php" </script>';
    exit;
} else {
    echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/validar_edicao.php'>'
    <script type=\"text/javascript\">
        alert(\"Erro na Edição\");
    </script>";
    echo '<script type="text/javascript">window.location = "editar_curso.php" </script>';
    exit;
}

?>