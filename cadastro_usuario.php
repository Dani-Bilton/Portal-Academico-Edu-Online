<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
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
    </style>
</head>
<?php
require 'chat_con.php';

?>
<body>
<nav class="navbar">
            <img class="logo" src="Imagens/logo.PNG">
            <ul>
                <li><a href="admin.php">Inicio</a></li>
                <li><a href="usuario.php">Contas</a></li>
                <li><a href="curso.php">Curso</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
    <div class="box">
        <form method="POST" action="validar_usuario.php">
            <fieldset>
                <legend><b>Cadastramento de Usuário</b></legend><br>
                <div class="inputbox">
                    <input type="text" name="bi" id="bi" class="inputUser" required>
                    <label for="bi" class="labelinput">Nº do Bilhete</label>
                 </div><br></br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                 </div><br></br>
                 <div class="inputbox">
                    <input type="tel" name="contacto" id="contacto" class="inputUser" required>
                    <label for="contacto" class="labelinput">Contacto</label>
                </div><br></br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">E-mail</label>
                </div><br>
                <div class="inputbox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div><br>
                <p>Sexo:</p>
                <input type="radio" id="femenino" name="genero" value="femenino" required>
                <label for="femenino">Femenino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br><br>
                <label for="nascimento"><b>Data de nascimento</b></label>
                <input type="date" name="nascimento" id="nascimento"  required>
                <br></br>
                <p>Grau:</p>
                <div class="inputbox">
                <select name="grau" id="grau">         
                    <option>Selecione</option>
                    <option>Médio</option>
                    <option>Bacharel</option>
                    <option>Licenciado</option>
                    <option>Mestre</option>
                    <option>Doutor</option>
                    <option>PhD</option>
                </select>
                </div><br></br>
                <div class="inputbox">
                    <input type="text" name="morada" id="morada" class="inputUser" required>
                    <label for="morada" class="labelinput">Endereço</label>
                </div><br>
                <div class="inputbox">
                <p>Tipo de Usuário:</p>
                <div class="inputbox">
                <select name="tipo" id="tipo">         
                    <option>Selecione</option>
                    <option>Administrador</option>
                    <option>Formador</option>
                    <option>Formando</option>
                </select>
                </div><br></br>
                <p>Curso:</p>
                <select name="curso" id="curso">
                        <option>Selecione</option>
                        <?php
                        require 'chat_con.php';
                        $curso = "SELECT * From curso";
                        $curso1 = mysqli_query($conn, $curso);
                        while($lista_curso = mysqli_fetch_assoc($curso1)){ ?>
                        <option value="<?php echo $lista_curso ['id_curso']; ?>"> <?php echo $lista_curso ['descricao']; ?>
                        </option> <?php
                        }
                        ?>
                    </select>
                </div><br>
                <input type="submit" name="submit" id="submit" value="Salvar"> 
            </fieldset>
        </form>
    </div>
</body>
</html>