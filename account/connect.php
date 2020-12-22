<?php 
    $db= array(
        'server'=>'localhost',
        'username'=>'root',
        'password'=>'',
        'dbname'=>'linhkiendientu'

    );
    $conn= mysqli_connect($db['server'],$db['username'],$db['password'],$db['dbname']);

    if(!$conn){
        die('kết nối không thành công'. mysqli_connect_error($conn));

    }
    
?>

