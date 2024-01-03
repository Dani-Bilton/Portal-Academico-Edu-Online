<?php

require 'chat_con.php';
$id = filter_input(INPUT_GET, 'id');
$teste = [];
    $sql = mysqli_query($conn ,"SELECT * FROM teste WHERE id_teste = '$id' ");
    $num = mysqli_num_rows($sql);
    if($num > 0){
            $teste =  mysqli_fetch_array($sql);
    } else {
        header("location: listar_cadastro.php");
    }
?>
<h1>Editar Cadastro</h1>
<form method="POST" action="validar_edicao.php" enctype = "multipart/form-data">
            <fieldset>
                <legend><b>Modelo de Cadastramento</b></legend><br>
                <div class="inputbox">
                <input type="hidden" name="id" id="id" value="<?=$teste['id_teste'];?>">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?=$teste['nome'];?>" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                 </div><br></br>
                 <div class="inputbox">
                    <input type="tel" name="contacto" id="contacto" class="inputUser" value="<?=$teste['contacto'];?>" required>
                    <label for="contacto" class="labelinput">Contacto</label>
                </div><br></br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?=$teste['email'];?>" required>
                    <label for="email" class="labelinput">E-mail</label>
                </div><br>
                <label for="nascimento"><b>Data de nascimento</b></label>
                <input type="date" name="nascimento" id="nascimento" value="<?=$teste['data1'];?>"  required>
                <br></br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?=$teste['cidade'];?>" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div><br></br>
                <div class="inputbox">
                    <input type="text" name="morada" id="morada" class="inputUser" value="<?=$teste['morada'];?>" required>
                    <label for="morada" class="labelinput">Endereço</label>
                </div><br>
                <input type="submit" name="submit" id="submit" value="Actualizar"> 
            </fieldset>
        </form>