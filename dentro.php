<?php
        session_start();
        if(isset($_SESSION['admin'])){
           echo '<script type="text/javascript">window.location = "index_admi.php" </script>';
        } else if(isset($_SESSION['nor'])){
            echo '<script type="text/javascript">window.location = "index_professor.php" </script>';
        } else if(isset($_SESSION['alu'])){
            echo '<script type="text/javascript">window.location = "index_aluno.php" </script>';
        } else {
            echo '<script type="text/javascript">window.location = "login.php" </script>';
        }

?>
