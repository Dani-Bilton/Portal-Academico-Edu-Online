<?php 
session_start();

session_destroy();
echo
"<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/Final/sair.php'>'
<script type=\"text/javascript\">
    alert(\"Sessão Terminada\");
</script>";

echo '<script type="text/javascript">window.location = "login.php" </script>';

?>