<?php
require 'chat_con.php';
require 'validar_programa.php';
$lista = [];
 session_start();
$curso = $_SESSION['nor1'];
$sql = mysqli_query($conn ,"SELECT * FROM programa where id_prog_curso = '$curso'");
$num = mysqli_num_rows($sql);
if($num > 0){
    $i = 0;
    while($i < $num)
    {
        $lista[$i] =  mysqli_fetch_array($sql);
        $i = $i + 1;
    }
}
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área dos Programas</title>
    <style>
        body{
            font-family:'Courier New', Courier, monospace;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            position: absolute;
            top:60%;
            left:50%;
            transform: translate(-50%, -50%);
            background-color: rgb(0, 0, 0, 0.5);
            padding:15px;
            border-radius:15px;
            width:28%;
            border-radius:8px;
            color:white;
        }
        fieldset{
            border:3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding:10px;
            text-align: center;
            background-color:dodgerblue;
            
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border:none;
            border-bottom:1px solid white;
            outline:none;
            font-size:15px;
            width:100%;
            letter-spacing:3px;
        }
        .labelinput{
            position: absolute;
            left:0%;
            top:0%;
            pointer-events:none;
            transition: .5px;
        }
        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top:-20px;
            font-size:12px;
            color:dodgerblue;
        }
        #nascimento{
                padding:8px;
                border:none;
                border-radius:10%;
                outline:none;
                font-size:15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            border:none;
            padding:15px;
            width:100%;
            cursor:pointer;
            color:white;
            font-size:15px;
            border-radius:10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(17, 54, 71), rgb(20, 147, 220));
        }
        .navbar{
    width: 100%;
    height: 10%;
    background: rgba(0,0,0,0.4);
}
.navbar ul{
    float: right;
    margin-right: 20px;
}
.navbar ul li{
    list-style: none;
    margin: 0 8px;
    display: inline-block;
    line-height: 80px;
}
.navbar ul li a{
    text-decoration: none;
    color:azure;
    font-family: 'Courier New', Courier, monospace;
    padding: 6px 13px;
    transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
    background: gold;
    border-radius: 2px;
}
.logo{
    width: 150px;
    height: auto;
    padding: 13px 100px;
}
table{
    width:60%;
    border-collapse: collapse;

}
th,td{
    height:50px;
    vertical-align:center;
    border:1px solid black;
}
    </style>
</head>
<body>
    <nav class="navbar">
        <img class="logo" src="Imagens/logo.PNG">
        <ul>
            <li><a href="index_professor.php">Inicio</a></li>
            <li><a href="programa.php">Programa</a></li>
            <li><a href="chat.php">Bate Papo</a></li>
            <li><a href="curso.php">Cursos</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
    </nav>
        <h1> Lista de Programas </h1>
        <table border="0">
            <thead>
                <th>Descrição</th>
                <th>Data a Publicada</th>
                <th>Data de Validade</th>
                <th>Arquivo</th>
                <th>Tamanho(MB)</th>
                <th>Downloads</th>
                <th>Ações</th>
            </thead>
            <?php foreach($lista as $teste): ?>
            <thead>
                <td><?=$teste["descricao"];?></td>
                <td><?=$teste["data_desponibilidade"];?></td>
                <td><?=$teste["data_expiracao"];?></td>
                <td><?=$teste["arquivo"];?></td>
                <td><?=$teste["tamanho"] / 1000 . "KB";?></td>
                <td><?=$teste["total"];?></td>
                <td>
                    <a href = "programa_aluno.php?id=<?=$teste["id_programa"];?> ">[ Baixar ]</a>   
                </td>
            </thead>
            <?php endforeach; ?>
        </table>
    </body>
</html>