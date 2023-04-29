<?php 
session_start();
$conn = mysqli_connect('localhost','root','','noveltees');
if(!$conn){
  echo mysqli_connect_error();
}


if(isset($_POST['submit'])){
    $title =$_POST['title'];
    
  $sql= "INSERT INTO size(title) VALUES('$title')";
  if(mysqli_query($conn,$sql) == TRUE){
    
    $_SESSION['status']="Size Added Successfully";
    header("Location: ../size_read.php");

  }
  else{
    $_SESSION['status']="Size Adding Failed";
    header("Location: ../size_read.php");
  }
}
if(isset($_POST['update'])){
    $id =$_POST['id'];
    $title =$_POST['title'];
    
  
  $sql= "UPDATE size set title='$title' where id='$id'";
  if(mysqli_query($conn,$sql) == TRUE){
   
    $_SESSION['status']=" Updated Successfully";
    header("Location: ../size_read.php");
  
  }
  else{
    $_SESSION['status']="Size updating Failed";
    header("Location: ../size_read.php");
  }
  }
  
  if(isset($_POST['delete'])){
    $id =$_POST['d_id'];
    $sql="DELETE from size where id=$id";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
      $_SESSION['status']=" Deleted Successfully";
      header("Location: ../size_read.php");
  
    }
    else{
      $_SESSION['status']="Size Deleting Failed";
      header("Location: ../size_read.php");
    }
  
  }
?>