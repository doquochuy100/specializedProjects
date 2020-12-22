<?php 
    $db = array(
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'linhkiendientu'
    );

    $conn = new mysqli($db['server'],$db['username'],$db['password'],$db['database']);
    

    if(!$conn){
        die('kết nối không thành công'. mysqli_connect_error($conn));

    }
    
?>