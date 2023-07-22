<?php 
require_once "inc/db.php";

$id = $_GET['id'];

if($id && (int) $id){

    $query = "SELECT id,name,email,status,image,created_at FROM `users` WHERE id=$id";
    $result = mysqli_query($conn, $query);//print_r($result);
    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);
    }


}else{
    header('Location:404.php');
}

require_once "views/user_edit.view.php";
?>