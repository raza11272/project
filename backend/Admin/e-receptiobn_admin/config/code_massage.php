<?php 
session_start();
$conn = mysqli_connect('localhost','root','','noveltees');
if(!$conn){
  echo mysqli_connect_error();
}




if(isset($_POST['update'])){
  $id =$_POST['id'];
  
  

$sql= "UPDATE massage set status='Read' where id='$id'";
if(mysqli_query($conn,$sql) == TRUE){
 
//   $_SESSION['status']=" Updated Successfully";
  header("Location: ../message_read.php");

}
else{
//   $_SESSION['status']="Category updating Failed";
  header("Location: ../message_read.php");
}
}


?>