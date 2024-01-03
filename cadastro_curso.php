<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
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
        .inputUser:valid ~ labelinput{
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
        #nascimento1{
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
    </style>
</head>

<body>
<nav class="navbar">
            <img class="logo" src="Imagens/logo.PNG">
            <ul>
                <li><a href="index_admin.php">Inicio</a></li>
                <li><a href="curso.php">Cursos</a></li>
                <li><a href="usuario.php">Usuario</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
    <div class="box">
        <form method="POST" action="validar_curso.php">
            <fieldset>
                <legend><b>Cadastro de Curso</b></legend><br>
                <div class="inputbox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelinput">Descrição do curso</label>
                 </div><br></br>
                 <div class="inputbox">
                    <input type="text" name="carga" id="carga" class="inputUser" required>
                    <label for="carga" class="labelinput">Carga Horária</label>
                </div><br></br>
                <label for="nascimento"><b>Data de Inicio</b></label>
                <input type="date" name="nascimento" id="nascimento"  required>
                <br></br>
                <label for="nascimento1"><b>Data de Fim</b></label>
                <input type="date" name="nascimento1" id="nascimento1"  required>
                <br></br>
                <input type="submit" name="submit" id="submit" value="Salvar"> 
            </fieldset>
        </form>
    </div>
    
</body>
</html>