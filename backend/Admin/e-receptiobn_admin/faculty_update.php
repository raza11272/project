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
    <title>Faculty Update</title>
</head>

<body style="background-image: linear-gradient(to right ,#fc604f  , #f08d20 );">
    <div class="container">
    <br><br>
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
  
              
    <div class=" shadow-lg  mb-5 bg-body rounded" style="background:white; align-items:center;height: 100%;">
        <form class="from-row" action="config/code_member.php" method="POST" enctype="multipart/form-data" style="padding:20px; width=100px;">
                    <?php
                    if (isset($_GET['id'])){
                        $id= $_GET['id'];
                        $sql= "SELECT * FROM `faculty/member` WHERE id='$id'";
                        $data = mysqli_query($conn, $sql);
                        $check_result= mysqli_num_rows($data)> 0;
                        if($check_result){
                          while( $rows = mysqli_fetch_array( $data ) ) 
                          {
                            
                    
                    ?>
    
        <div style="margin-left:100px;background:white;">
                                
            <h2 style="text-decoration:underline; text-decoration-color:orange;">Reset your info</h2>
                <br>
                <input type="hidden" name="id" value="<?php echo $rows ['ID']?>">

            <div class="form-group col-md-6 ">
                <label for="exampleFormControlInput1">Room_Number</label>
                <input name="number" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Room_Number']?>" placeholder="">
            </div>
            <div class="form-group col-md-6 ">
                <label for="exampleFormControlInput1">Phone_Number</label>
                <input name="p_number" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Phone_Number']?>" placeholder="">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Slot_1</label>
                <input name="s1" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Slot_1']?>" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Slot_2</label>
                <input name="s2" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Slot_2']?>" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Slot_3</label>
                <input name="s3" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Slot_3']?>" placeholder="">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Password</label>
                <input name="password" type="password"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Password']?>" placeholder="">
            </div>
            <button type="submit" name="fac_rest" class=" btn  btn-dark shadow fw-bold rounded-pill"  style=" margin-left:70px;background-image: linear-gradient(to right ,#fc604f , #f08d20);width:300px;">Save</button>
        </form>
    </div>


  
 
<?php
                          }
                        }
}
else{
   die("Can not execute query");
}
?>
 
 

</div>
</body>
</html>