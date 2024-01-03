<?php

include("chat_con.php");
if(isset($_POST['nome']) && isset($_POST['contacto']) && isset($_POST['email']) && isset($_POST['genero']) && isset($_POST['nascimento']) && isset($_POST['cidade']) && isset($_POST['morada']) && isset($_FILES['arquivo'])){
    $nome = $_POST['nome'];
    $contacto = $_POST['contacto'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $sexo = $_POST['genero'];
    $data = $_POST['nascimento'];
    $cidade = $_POST['cidade'];
    $morada = $_POST['morada'];
    $arquivo = $_POST['arquivo'];
    $extensao = strtolower(substr($arquivo['arquivo']['name'], -4));
    $novo_nome = md5(time() . $extensao);
    $diretorio = "upload/";
    move_uploaded_file($arquivo['arquivo']['tmp_name'], $diretorio.$novo_nome);
    $get = mysqli_query($conn ,"SELECT * FROM teste WHERE email = '$email' ");
    $num = mysqli_num_rows($get);
    if($num == 0){
        $get = mysqli_query($conn ,"INSERT INTO teste SET nome= '$nome', contacto= '$contacto', email= '$email', sexo= '$sexo', data1 ='$data', cidade= '$cidade', morada= '$morada', arquivo = '$novo_nome' ");
        echo
        "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/salvar_cadastro.php'>'
        <script type=\"text/javascript\">
            alert(\"Salvo com Sucesso\");
        </script>";
        echo '<script type="text/javascript">window.location = "cadastro.php" </script>';
        exit;
    } else {
        echo
        "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/salvar_cadastro.php'>'
        <script type=\"text/javascript\">
            alert(\"Este E-mail já existe\");
        </script>";
        echo '<script type="text/javascript">window.location = "cadastro.php" </script>';
    }
    
} else {
    echo
    "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/eliminar.php'>'
    <script type=\"text/javascript\">
        alert(\"Preencha novamente os campos solicitados\");
    </script>";

    echo '<script type="text/javascript">window.location = "cadastro.php" </script>';
    exit;
}
?>