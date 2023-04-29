<?php include "../header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appoinment Booked</title>
  <style>
    ::root {
        --custom:#FFFFFF ;
    }
</style>
</head>
<body>
  

<?php 

$conn = mysqli_connect('localhost','root','','smart reception');



if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $Cat= $_POST['Cat'];
    $Dept= $_POST['Dept'];
    $Slot= $_POST['Slot'];
    
    $username= $_POST['username'];
    $email= $_POST['email'];
    $number= $_POST['number'];
    $visitor_type= $_POST['visitor_type'];
    mysqli_query($conn,"INSERT INTO `visistor`( `Name`, `Phone Number`, `Type`) VALUES ('$username','$number','$visitor_type')");
    $sql= "INSERT INTO `appoinment`( `Visitor Name`, `Visitor_Number`,`visitor_type` ,`Faculty Name`, `Dept`, `Category`, `Slot`) VALUES('$username','$number','$visitor_type','$name','$Dept','$Cat','$Slot')";
    if(mysqli_query($conn,$sql) == TRUE){
      
     
      ?>
      <br><br>
      <div class="container">
      
        <div class="row shadow-lg  mb-5 bg-body rounded" style="background:var(--custom); align-items:center;height: 500px;">
        
          <div class="col-md-6" style="background-image: linear-gradient(to top ,#fc604f  , #f08d20 );height:500px; border-radius: 0px 0% 0% 0px ;">
          <br><br><br><br>
            <div style="margin-left:100px;">
            <h2 style="text-decoration:underline;color:white; text-decoration-color:orange;">Appoinment Booked</h2>
                <br>
              Name: <?php echo $name ?>;
              <br>
              <?php echo $Cat ?>
              <br>
              <?php echo $Dept ?>
              <br>
              Your Name:<?php echo $username ?>
              <br>
              Time:<?php echo $Slot ?>
              <br>
              <br>
              <center><a href="../index.php"><button class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">Back</button></a></center>
            </div>
          </div>
          
          <div class="col-md-6" >
            <br><br><br>
                <img src="../Admin/e-receptiobn_admin/imeges/banner_vistor.jpg" style="height:400px; margin-left:150px;" alt="">
            </div>
      </div>
      </div>
      <?php
      
  
    }
    else{
      $_SESSION['status']="Appoinment Failed";
      header("Location: ../visitor.php");
    }
}


?>
</body>
</html>