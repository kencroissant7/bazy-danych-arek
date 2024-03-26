<?php 
echo "tutaj delete.php chopie <br>";
if(isset($_POST['zmk'])){
    $idu = $_POST['zmk'];
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