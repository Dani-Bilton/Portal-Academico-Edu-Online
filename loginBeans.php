<?php
ob_start();
include_once 'config/Defs_Urls.php';
include_once 'config/Database.php';
session_start();


include_once 'config/instancia_dba.php';

$validacao = $test->query("SELECT * FROM usuario where email = '" . $_POST['email'] . "' and senha = '" . $_POST['senha'] ."'");
$tam_validacao = count($validacao);

echo $_POST['email'] . "<br>";
echo $_POST['senha'] . "<br>";

echo $tam_validacao;

if ($tam_validacao == 0) {
    $_SESSION['erro_login'] = "Dados incorrectos, tente novamente.";
    session_write_close();
    header('Location:http://localhost/Base'. URL_LOGIN_PAGE , true);
    exit();
}else
{
    echo "--->";
    $_SESSION['usuario'] = $_POST['email'];
    if ( $_SESSION['usuario'] == 'trageacademicoangola@ucan.edu' )
    {
        $_SESSION['perfilView'] = "false";
    }else{
        $_SESSION['perfilView'] = "true";
    }
    $sql = ($test ,"SELECT * FROM usuario WHERE email = '".$_POST['email'] ."' AND senha = '". $_POST['senha'] ."'");
    $res = mysqli_query($test,$sql);
    $rows = mysqli_fetch_array($res);
    $adm = $rows['adm'];
    $nome = $rows['nome_completo'];
    $curso = $rows['id_curso_usuario'];
    $id_U = $rows['id_usuario'];
        if($adm == 1) {
            $_SESSION['admin'] = $nome;
            $_SESSION['nor3'] = $adm;
            session_write_close();
            header("Location:http://localhost/Final/". URL_ADMIN , true);
            exit();
        }else if($adm == 0){
            $_SESSION['nor'] = $nome;
            $_SESSION['nor1'] = $curso;
            $_SESSION['nor2'] = $id_U;
            $_SESSION['nor3'] = $adm;
            session_write_close();
            header("Location:http://localhost/Base/visao/". URL_PROFESSOR , true);
            exit();
        } else {
            $_SESSION['alu'] = $nome;
            $_SESSION['nor1'] = $curso;
            $_SESSION['nor2'] = $adm;
            $_SESSION['nor3'] = $adm;
            session_write_close();
            header("Location:http://localhost/Base/visao/". URL_ALUNO , true);
            exit();
        }
        
    }
    
   
?>
