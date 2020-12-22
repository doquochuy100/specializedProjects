<!-- <?php 
    if(!isset($_SESSION)) session_start();
    include 'connect.php';
    $tam= isset($_SESSION['cart'])?$_SESSION['cart']:[];
    $action= isset($_GET['action'])?$_GET['action']:'';
    
 
    if ($action=='them')
    { 
        foreach($_POST['soluong'] as $key => $value){           
            $tam[$key] += $value;                   
    }
    }
    // if(isset($_GET['action'])) {
    //     function updatesoluong($add = false){
    //         foreach($_POST['soluong'] as $key => $value){
    //            if($add)          
    //                 $tam[$key] += $value; 
    //            else
    //             $tam[$key] = $value;           
    //         }
    //     }
    // } 

    if ($action=='xoa')
    {
        $id= isset($_GET['id'])?$_GET['id']:'';
        unset($tam[$id]);   
    }

    if($action=='submit')
    {
        if(isset($_POST['capnhap']))
        foreach($_POST['soluong'] as $key => $value){           
                 $tam[$key] = $value;                   
         }
    }

   
    $_SESSION['cart']= $tam;
   header('location:gioHang.php');
?> -->