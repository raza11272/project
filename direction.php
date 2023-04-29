<?php
session_start();
include "header.php" ?>
<?php include "navber.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Get a smart direction</title>
</head>
<body style="background: linear-gradient(to left, white 80%, #f08d20 20%  )" >
    <br><br>
   
        <div class="container">
    <br><br><br><br>
            <div class="row" >
            <?php
        if(isset($_SESSION['status'])){
                        ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                <?php echo'<h4>'.$_SESSION['status']. '</h4>'?>
                                </div>
                                </div>
                        
                        <?php 
                        unset($_SESSION['status']);
                      }
                    ?>
                <div class="col-md-6 col-12">
                <!-- <br><br><br><br> -->
                <img src="imeges/map.png" style="width:100%; " alt="">
                </div>
                <div class="col-md-6 col-12" style=" border-top-style: solid ; border-right-style: solid ; border-bottom-style: solid ; border-color:orange; align-items:center;padding-left:0px;">
                <!-- <br><br><br><br> -->
                <div style=" display:flex; flex-direction:column; align-items: center; background-color:white;
                   "   >
                    <br><br>
                     <h2>Which place are you looking for?</h2>
            <hr>
            
         
            
            <center>
            
            <div class="input-group" style="margin-left:20px;" >
           
            <form action="direction_search.php" method="POST">
                <input type="text" placeholder="Search" name="RN" class="rounded-pill w-5" style="width:250px;" required>
                <button  type="submit" style="" name="submit"class="btn btn-dark rounded-pill" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                 
            </form>
                    
                    </div>
                    
            </center>

            
            <br>
            <a href="direction_read.php?Room_Name=Admission Office" class=" btn rounded-pill btn-dark shadow fw-bold"style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:250px;">Admission Office</a>

            <br>
            <a href="direction_read.php?Room_Name=Library" class=" btn rounded-pill btn-dark shadow fw-bold"style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:250px;">Library</a>
            <br>
            <a href="direction_read.php?Room_Name=Canteen" class=" btn rounded-pill btn-dark shadow fw-bold"style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:250px;">Canteen</a>
            <br>
            <br><br><br><br>
            <a href="index.php"><button class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">Back</button></a>
                    </div>
               
                </div>
            </div>
            <br><br>
        </div>
            
       
        <script src="https://kit.fontawesome.com/fb3db3fea9.js" crossorigin="anonymous"></script>
</body>
</html>