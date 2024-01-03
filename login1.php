<?php
ob_start();
include_once 'config/Defs_Urls.php';
include_once 'config/Database.php';
session_start();
$sname = "localhost";
$uname= "root";
$password = "";
$db_name = "bd_final";
$conn= mysqli_connect($sname, $uname, $password, $db_name);
if(!$conn){
 echo "Conexão falhou";
}

if(isset($_POST['email']) && isset($_POST['senha'])){
$email = $_POST['email'];
$senha = $_POST['senha'];
$vetor = [];
$get = mysqli_query($conn ,"SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");
$num = mysqli_num_rows($get);
if($num == 1){
    while($percorrer = mysqli_fetch_array($get)){
        $adm = $percorrer['adm'];
        $nome = $percorrer['nome_completo'];
        $curso = $percorrer['id_curso_usuario'];
        $id_U = $percorrer['id_usuario'];
        $data = date('d/m/Y');
        $hora_entrada = date('h:i:s');
        session_start();
        if($adm == 1) {
            $_SESSION['admin'] = $nome;
            $_SESSION['nor3'] = $adm;
            session_start();
        }else if($adm == 0){
            $_SESSION['nor'] = $nome;
            $_SESSION['nor1'] = $curso;
            $_SESSION['nor2'] = $id_U;
            $_SESSION['nor3'] = $adm;
            $_SESSION['nor4'] = $data;
            $_SESSION['nor5'] = $hora_entrada;
        } else {
            $_SESSION['alu'] = $nome;
            $_SESSION['nor1'] = $curso;
            $_SESSION['nor2'] = $id_U;
            $_SESSION['nor3'] = $adm;
            $_SESSION['nor4'] = $data;
            $_SESSION['nor5'] = $hora_entrada;
        }

        "<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost:81/Final/login.php'>'
        <script type=\"text/javascript\">
            alert(\"Bem Vindo ao Sistema\");
        </script>";

        echo '<script type="text/javascript">window.location = "dentro.php" </script>';
    }

} else{
    $_SESSION['erro_login'] = "Dados incorrectos, tente novamente.";
    session_write_close();
    header('Location:http://localhost:81/Final/'. URL_LOGIN_PAGE , true);
    exit();
    
}
}
?>