<?php include "header.php" ?>
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
    <title>Get an appointment</title>
    
</head>
<body style="background: linear-gradient(to left, white 80%, #f08d20 20%  )">
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
    <br><br>
    <div class="container">
        <div class="row shadow-lg  mb-5 bg-body rounded" style="border-right: solid orange 15px">
            <div class="col-md-6 col-12" style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:430px;height:500px;">
            <br><br>
            <div class="card" style="height:400px;width:350px; background: linear-gradient(to top, white 50%, lightgray 50%);margin-left:30px; ">

                    <center><a href="apnt.php?id=<?php echo $rows ['ID']?>"> <img src="Admin/e-receptiobn_admin/imeges/faculty_members/<?php echo $rows ['image']?>" class="card-img-center" style="height:250px;width:250px; border-radius:100%;margin-top:20px;" alt="..."></a></center>
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
            
            <div class="col-md-6 col-12 " style="margin-left:80px;">
            <br><br>
            <a href="apnt.php"></a><button class=" btn  btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">Profile</button></a>
     <a href="apnt_t.php?id=<?php echo $rows ['ID']?>">
     <button class=" btn  btn-dark  fw-bold "  style="background-color:white;width:200px;color:black;">Time Slot</button><br><br>
            <form action="visitor.php" method="GET">
     </a> 



            
            <input type="hidden" name="name" value="<?php echo $rows ['Name'] ?>" >
                <h3 class="fw-bold"><?php echo $rows ['Name'] ?></h3>
                <input type="hidden" name="Cat" value="<?php echo $rows ['Category'] ?>" >
                <h5><?php echo $rows ['Category'] ?></h5>

            
            <input type="hidden" name="Dept" value="<?php echo $rows ['Dept'] ?>" >
                <h5>Department:<?php echo" " ?><?php echo $rows ['Dept'] ?></h5>
                
            
            <input type="hidden" name="Dept" value="<?php echo $rows ['Room_Number'] ?>" >
                <h5>Room Number:<?php echo" " ?><?php echo $rows ['Room_Number'] ?></h5>
                
           

            <br><br>

            </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>