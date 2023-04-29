<?php 
session_start();


$conn = mysqli_connect('localhost','root','','smart reception');


if(isset($_POST['submit'])){
    $Room_Name =$_POST['name'];
    
    $Room_Number  =$_POST['number'];
    $Direction =$_POST['direction'];
    
   $Map =  $_FILES['file']['name'];
   
   
   $tmpname =  $_FILES['file']['tmp_name'];
   
   $uploc = '../../imeges/'.$Map;
 
   $uploadOk=1;
   $imageFileType= strtolower(pathinfo($Map,PATHINFO_EXTENSION));
  //  if(file_exists($uploc)){
  //      $uploadOk=0;
  //      $_SESSION['status']="File allready  exist";
  //      header("Location: ../direction_read.php");

  //  }
   if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' ){
       $uploadOk=0;
       $_SESSION['status']="Only jpg,png and jpeg required";
       header("Location: ../direction_read.php");
   }
   if($uploadOk==1){
    $sql= "INSERT INTO direction(Room_Name,Room_Number,Direction,Map) VALUES('$Room_Name','$Room_Number','$Direction','$Map')";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
     
      $_SESSION['status']="Direction Added Successfully";
      header("Location: ../direction_read.php");
  
    }
    else{
      $_SESSION['status']="Direction Adding Failed";
      header("Location: ../direction_read.php");
    }
   }
   
 }
   
  

if(isset($_POST['update'])){
  echo $id =$_POST['id'];
  $Room_Name =$_POST['name'];
    
  $Room_Number  =$_POST['number'];
  $Direction =$_POST['direction'];
  $Map =  $_FILES['file']['name'];
 
 
 $tmpname =  $_FILES['file']['tmp_name'];
 
 $uploc = '../../imeges/'.$Map;
  echo $sql= " UPDATE `direction` SET `Room_Name`='$Room_Name',`Room_Number`='$Room_Number',`Direction`='$Direction',`Map`='$Map' WHERE  ID='$id'";
 echo  mysqli_query($conn,$sql);
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']="Direction Updated Successfully";
    header("Location: ../direction_read.php");

  }
  else{
    $_SESSION['status']="Direction Updating Failed";
    // header("Location: ../direction_read.php");
  }
}

if(isset($_POST['delete'])){
 echo $id =$_POST['d_id'];
  $Map =  $_FILES['file']['name'];
  $sql="DELETE from direction where ID=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    unlink("../../imeges/".$Map);
    $_SESSION['status']="Direction Deleted Successfully";
    header("Location: ../direction_read.php");

  }
  else{
    $_SESSION['status']="Direction Deleting Failed";
    header("Location: ../direction_read.php");
  }

}

?>