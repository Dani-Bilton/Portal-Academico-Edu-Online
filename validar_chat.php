<?php
include("chat_con.php");
session_start();
$curso = $_SESSION['nor1'];
$get = mysqli_query($conn ,"SELECT * FROM chat where id_chat_curso = '$curso' ");
while($percorrer = mysqli_fetch_array($get)){
	echo "<h3>".$percorrer['nome']."</h3>";
	echo "<h5>".$percorrer['mensagem']."</h5>";
}
?>