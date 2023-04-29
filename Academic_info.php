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
    <title>Academics</title>
</head>
<body style="background: linear-gradient(to left, white 80%, #f08d20 20%  )">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12" >
            <?php 
                
                $sql ="SELECT title,description,web from `search` ";
                 $data = mysqli_query($conn, $sql);
                 $check_result= mysqli_num_rows($data)> 0;
                if($check_result){
                while( $rows = mysqli_fetch_array( $data ) ) 
                {
                    ?>
            <div class="card mt-2" style="margin-left:123px;">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $rows['title']?></h5>
                    <p class="card-text"><?php echo $rows['description']?></p>
                    <a href="<?php echo $rows['web']?>" class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:150px;">For more deteils</a>
                </div>
                </div>
                <?php
                }
            }else{
                echo "Sorry no data found";
            
            }
    ?>
            </div>
      
        </div>
   

     </div>
</body>
</html>