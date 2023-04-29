<?php 
session_start();
include "header.php" ?>
<?php include "navber.php" ?>
<?php 

$conn = mysqli_connect('localhost','root','','smart reception');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please give your info</title>
<style>
    ::root {
        --custom:#FFFFFF ;
    }
</style>
</head>
<body style="background: linear-gradient(to left, white 80%, #f08e1f 20%  )" >
    <div class="container" >
    <br><br><br><br>
    <?php 
              if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['status']. '</h4>'?></div>
                <?php 
                unset($_SESSION['status']);
              }
              if( isset($_SESSION['auth_status']) ){
                ?>
                <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['auth_status']. '</h4>'?></div>
                <?php 
                unset($_SESSION['auth_status']);
              }
            ?>
  
              
        <div class="row shadow-lg  mb-5 bg-body rounded" style="background:var(--custom); align-items:center;height: 500px;">
        <div class="col-md-6">
            <div style="margin-left:100px;">
                                
            <h2 style="text-decoration:underline; text-decoration-color:orange;">Log in </h2>
                <br>
                <form action="Admin/e-receptiobn_admin/config/code_log_in.php" method="post">
                      
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">User_Name:</label>
                            <div class="col-sm-10">
                            <input style="border:3px orange solid; width:350px;" name="username" type="mail" class="form-control" id="inputPassword">
                            </div>
                        </div>

                  
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Password:</label>
                            <div class="col-sm-10">
                            <input  style="border:3px orange solid; width:350px;" name="password" type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>

                       
                    </div>
                        
                        <br><br>
                        
                       <center>
                           
                       <button type="submit" name="login" class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">Log In</button>
                       </center>
                       <br>
                       
                       </form>
            
            </div>
            <div class="col-md-6" style="background-image: linear-gradient(to top ,#fc604f  , #f08d20 );height:500px; border-radius:0px 0px 0px 0px;">
            <br><br><br>
                <img src="Admin/e-receptiobn_admin/imeges/banner_vistor.jpg" style="height:400px; margin-left:150px;" alt="">
            </div>
       
        </div>
    </div>

</body>
</html>