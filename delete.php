<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "DELETE FROM `crud` WHERE id=$id";
  $result = mysqli_query($connect,$sql);
  if($result){
    // echo "User deleted";
    header('location:display.php');
  }else{
    die(mysqli_error($connect));
  }
}
?>