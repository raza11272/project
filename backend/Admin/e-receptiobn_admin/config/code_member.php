<?php 
session_start();


$conn = mysqli_connect('localhost','root','','smart reception');


if(isset($_POST['submit'])){
   
    echo $image =  $_FILES['file']['name'];
  
   
    $tmpname =  $_FILES['file']['tmp_name'];
    $Name =$_POST['name'];
    $Dept =$_POST['Dept'];
    
    $Room_Number  =$_POST['number'];
     $Phone_Number  =$_POST['p_number'];
     $Category =$_POST['cat'];
     $Slot_1 =$_POST['s1'];
     $Slot_2 =$_POST['s2'];
    $Slot_3 =$_POST['s3'];
    $username =$_POST['username'];
    $Password =$_POST['password'];
    $Role =$_POST['role'];
    

   
   $uploc = '../imeges/faculty_members/'.$image;
 
   $uploadOk=1;
   $imageFileType= strtolower(pathinfo($image,PATHINFO_EXTENSION));
  //  if(file_exists($uploc)){
  //      $uploadOk=0;
  //      $_SESSION['status']="File allready  exist";
  //      header("Location: ../direction_read.php");

  //  }
   if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' ){
       $uploadOk=0;
       $_SESSION['status']="Only jpg,png and jpeg required";
       header("Location: ../member_read.php");
   }
   if($uploadOk==1){
    $sql= "INSERT INTO `faculty/member`( `image`, `Name`, `Dept`, `Room_Number`, `Phone_Number`, `Category`, `Slot_1`, `Slot_2`, `Slot_3`, `User_Name`, `Password`,`Role`)  VALUES('$image','$Name','$Dept','$Room_Number','$Phone_Number','$Category','$Slot_1','$Slot_2','$Slot_3','$username','$Password','$Role')";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
     
      $_SESSION['status']="Member Added Successfully";
      header("Location: ../member_read.php");
  
    }
    else{
      $_SESSION['status']="Member Adding Failed";
      header("Location: ../add_member.php");
    }
   }
   
 }
   
  

if(isset($_POST['update'])){
  echo $image =  $_FILES['file']['name'];
  
   
  $tmpname =  $_FILES['file']['tmp_name'];
  $id =$_POST['id'];
  $Name =$_POST['name'];
  $Dept =$_POST['Dept'];
  
  $Room_Number  =$_POST['number'];
   $Phone_Number  =$_POST['p_number'];
   $Category =$_POST['cat'];
   $Slot_1 =$_POST['s1'];
   $Slot_2 =$_POST['s2'];
  $Slot_3 =$_POST['s3'];
  $username =$_POST['username'];
  $Password =$_POST['password'];
  $Role =$_POST['role'];
  

 
 $uploc = '../imeges/faculty_members/'.$image;

 $uploadOk=1;
 $imageFileType= strtolower(pathinfo($image,PATHINFO_EXTENSION));
//  if(file_exists($uploc)){
//      $uploadOk=0;
//      $_SESSION['status']="File allready  exist";
//      header("Location: ../direction_read.php");

//  }
 if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' ){
     $uploadOk=0;
     $_SESSION['status']="Only jpg,png and jpeg required";
     header("Location: ../member_read.php");
 }
 if($uploadOk==1){
  $sql= "UPDATE `faculty/member` SET `image`='$image',`Name`='$Name',`Dept`='$Dept',`Room_Number`='$Room_Number',`Phone_Number`='$Phone_Number',`Category`='$Category',`Slot_1`='$Slot_1',`Slot_2`='$Slot_2',`Slot_3`='$Slot_3',`User_Name`='$username',`Password`='$Password',`Role`='$Role' WHERE ID=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
   
    $_SESSION['status']="Member Updated Successfully";
    header("Location: ../member_read.php");

  }
  else{
    $_SESSION['status']="Member Adding Failed";
    header("Location: ../member_read.php");
  }
 }
}

if(isset($_POST['delete'])){
  echo $id =$_POST['d_id'];
  
  echo $sql="DELETE from `faculty/member` where ID=$id";
  if(mysqli_query($conn,$sql) == TRUE){
  
    $_SESSION['status']="Member Deleted Successfully";
    header("Location: ../member_read.php");

  }
  else{
    $_SESSION['status']="Member Deleting Failed";
    // header("Location: ../member_read.php");
  }

}



if(isset($_POST['fac_rest'])){
 
  
   

  $id =$_POST['id'];
 
  $Room_Number  =$_POST['number'];
  $Phone_Number  =$_POST['p_number'];
 
  $Slot_1 =$_POST['s1'];
  $Slot_2 =$_POST['s2'];
 $Slot_3 =$_POST['s3'];

 $Password =$_POST['password'];


  $sql= "UPDATE `faculty/member` SET `Room_Number`='$Room_Number',`Phone_Number`='$Phone_Number',`Slot_1`='$Slot_1',`Slot_2`='$Slot_2',`Slot_3`='$Slot_3',`Password`='$Password' WHERE ID=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    
   
    $_SESSION['status']="Update Done";
    header("Location: ../faculty_dashboard.php");

  }
  else{
    $_SESSION['status']="Update  Failed";
    header("Location: ../faculty_dashboard.php");
  }
 }

 if(isset($_POST['done'])){
 
  
   

  $id =$_POST['id'];
 
  $done="done";

  echo $sql= "UPDATE `appoinment` SET `status`='$done' WHERE ID=$id ";
  if(mysqli_query($conn,$sql) == TRUE){
    
   
    $_SESSION['status']="Meeting Done";
    header("Location: ../faculty_dashboard.php");

  }
  else{
    $_SESSION['status']="Member Adding Failed";
    header("Location: ../member_read.php");
  }
 }


?>