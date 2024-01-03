<?php
$conn = mysqli_connect("localhost","root","","bd_final");
if(isset($_GET['baixar'])){
    $arq = [];
    $sql = "SELECT * FROM programa WHERE id_programa = ". $_GET['baixar'] ."; "; 
    $result = mysqli_query($conn,$sql); 
    $num = mysqli_num_rows($result);
    if($num > 0){
            $arq =  mysqli_fetch_assoc($result);
            $pacote = 'arquivos/'. $arq['arquivo'];
            if(file_exists($pacote)){
                header('Content-Type: application/octet-stream');
                header('Content-Description: file Transfer');
                header('Content-Disposition: attachment; filename='.basename($pacote));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma:public');
                header('Content-Length:'. filesize('arquivos/'.$arq['name']));  
                readfile('arquivos/' . $arq['name']);
                 $i = $arq['total'] + 1;
                 $j = "UPDATE programa SET total='$i' WHERE id_programa= ". $_GET['baixar'] ." ";
                mysqli_query($conn,$j);
                exit;
            }
        } 

}
?>
