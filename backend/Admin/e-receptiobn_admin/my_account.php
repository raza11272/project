<?php 
include('auth.php');

include('includes/header.php');
include('includes/db_connect.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get an appointment</title>
    
</head>
<body style="background: linear-gradient(to left, white 80%, #f08d20 20%  )">


<nav class=" navbar navbar-expand-lg navbar-dark bg-dark text-white">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="nav-link active  text-white "  aria-current="page" href="faculty_dashboard.php">Home</a>

      <ul class="navbar-nav ml-auto">
     
     <li class="nav-item dropdown">
     <div class="dropdown">
     
 <button class="btn btn-secondary dropdown-toggle rounded-pill" type="button" data-toggle="dropdown" aria-expanded="false">
 <i class="fas fa-user-circle"><?php if(isset($_SESSION['auth'])){
   echo $_SESSION['auth_user']['name'];
   $name=$_SESSION['auth_user']['name'];
   $id=$_SESSION['auth_user']['id'];
  } 
  else{
   echo "Not Logged In";
  }
  ?></i>
 </button>

 <div class="dropdown-menu">
  
   <a class="dropdown-item" href="my_account.php?id=<?php echo $id ?>">My Account </a>
   <a class="dropdown-item" href="history.php">Appoinments History</a>
   <form action="./config/code_log_in.php" method="POST" >
     <button type="submit" name="logout" class="dropdown-item">Log Out</button>
   </form>
 </div>
</div>
     </li>
     
     
   </ul>
    </div>
  </div>
</nav>




<br><br><br>
<div class="container">
        <div class="row shadow-lg  mb-5 bg-body rounded" style="border-right: solid orange 15px">
<?php
                    if (isset($_GET['id'])){
                        
                        $id= $_GET['id'];
                        $sql= "SELECT * FROM `faculty/member` WHERE ID='$id'";
                        $data = mysqli_query($conn, $sql);
                        $check_result= mysqli_num_rows($data)> 0;
                        if($check_result){
                          while( $rows = mysqli_fetch_array( $data ) ) 
                          {
                            
                    
                    ?>
    <br><br>

            <div class="col-md-5 col-12" style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:430px;height:500px;">
            <br><br>
            <div class="card" style="height:400px;width:350px; background: linear-gradient(to top, white 50%, lightgray 50%);margin-left:45px; ">

                    <center> <img src="imeges/faculty_members/<?php echo $rows ['image']?>" class="card-img-center" style="height:250px;width:250px; border-radius:100%;margin-top:20px;" alt="..."></center>
                    <div class="card-body" style="color:black;text-align:center;">

                            <span><?php echo $rows ['Name']?></span>
                            <br>
                            <span><?php echo $rows ['Dept']?></span>
                            <br>
                            <span>
                            <?php echo $rows ['Category']?></span>
                    </div>

                    </div>
                </div>
            
            <div class="col-md-6 col-12 " style="margin-left:60px;">
            <br><br>
            <button class=" btn  btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:500px;">Profile</button><br><br>




            
            <input type="hidden" name="name" value="<?php echo $rows ['Name'] ?>" >
                <h3  style="font-weight:bold"><?php echo $rows ['Name'] ?></h3>
                <input type="hidden" name="Cat" value="<?php echo $rows ['Category'] ?>" >
                <h5><?php echo $rows ['Category'] ?></h5>

            
            <input type="hidden" name="Dept" value="<?php echo $rows ['Dept'] ?>" >
                <h5>Department:<?php echo" " ?><?php echo $rows ['Dept'] ?></h5>
                
            
            <input type="hidden" name="Dept" value="<?php echo $rows ['Room_Number'] ?>" >
                <h5>Room Number:<?php echo" " ?><?php echo $rows ['Room_Number'] ?></h5>
                <h5>Slot_1:<?php echo" " ?><?php echo $rows ['Slot_1'] ?></h5>
                <h5>Slot_2:<?php echo" " ?><?php echo $rows ['Slot_2'] ?></h5>
                <h5>Slot_3:<?php echo" " ?><?php echo $rows ['Slot_3'] ?></h5>
                <br><br>
                <center><a href="faculty_update.php?id=<?php echo $rows ['ID'] ?>"><button class=" btn  btn-dark shadow fw-bold rounded-pill"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:300px;">Reset</button></a></center>

            <br><br>

         
            </div>
        </div>
    </div>
    <?php
                          }
                          }
                  
                    }
        else{
        die("Can not execute query");
        }
?>
 
</body>
</html>
<?php include('includes/script.php');?>