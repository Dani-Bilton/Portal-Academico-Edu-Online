<?php

require 'chat_con.php';
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'descricao');
$contacto = filter_input(INPUT_POST, 'desponibilidade');
$data = filter_input(INPUT_POST, 'expiracao');
if(isset($_POST['id']) && isset($_POST['descricao']) && isset($_POST['desponibilidade']) && isset($_POST['expiracao'])){
    $get = mysqli_query($conn ," UPDATE programa SET descricao= '$nome', data_desponibilidade= '$contacto', data_expiracao= '$data' WHERE id_programa = $id ");
   echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/validar_edicao.php'>'
    <script type=\"text/javascript\">
        alert(\"Editado com Sucesso\");
    </script>";
    echo '<script type="text/javascript">window.location = "programa.php" </script>';
    exit;
} else {
    echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/validar_edicao.php'>'
    <script type=\"text/javascript\">
        alert(\"Erro na Edição\");
    </script>";
    echo '<script type="text/javascript">window.location = "editar_programa.php" </script>';
    exit;
}

?>