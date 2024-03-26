<?php 
echo "tutaj dlete.php chopie <br>";
if(isset($_GET['zmk'])){
    $idu = $_GET['zmk'];
    include_once("connect.php");
    $zap_delete = $con->query("DELETE from `uczniowie` where idu=$idu");
    if($zap_delete){
        echo"ok";
        header("location:index.php");
    }else{
        echo"nie ok";
    }
    $con->close();
}else{
    echo "brak dostępu";
}

?>