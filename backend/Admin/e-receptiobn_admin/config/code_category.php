<?php 
session_start();
$conn = mysqli_connect('localhost','root','','noveltees');
if(!$conn){
  echo mysqli_connect_error();
}


if(isset($_POST['submit'])){
    $title =$_POST['title'];
    
  $sql= "INSERT INTO category(title) VALUES('$title')";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']="Category Added Successfully";
    header("Location: ../category_read.php");

  }
  else{
    $_SESSION['status']="Category Adding Failed";
    header("Location: ../category_read.php");
  }
}

if(isset($_POST['update'])){
  $id =$_POST['id'];
  $title =$_POST['title'];
  

$sql= "UPDATE category set title='$title' where id='$id'";
if(mysqli_query($conn,$sql) == TRUE){
 
  $_SESSION['status']=" Updated Successfully";
  header("Location: ../category_read.php");

}
else{
  $_SESSION['status']="Category updating Failed";
  header("Location: ../category_read.php");
}
}

if(isset($_POST['delete'])){
  $id =$_POST['d_id'];
  $sql="DELETE from category where id=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']=" Deleted Successfully";
    header("Location: ../category_read.php");

  }
  else{
    $_SESSION['status']="Category Deleting Failed";
    header("Location: ../category_read.php");
  }

}
?>