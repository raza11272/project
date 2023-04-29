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
    <title>Please give your info</title>
<style>
    ::root {
        --custom:#FFFFFF ;
    }
</style>
</head>
<body style="background-image: linear-gradient(to right ,#fc604f  , #f08d20 );">
    <div class="container">
    <br><br><br><br>
    <?php
                    if (isset($_GET['name'])){
                        
                        
                        
                        $name= $_GET['name'];
                        $Cat= $_GET['Cat'];
                        $Dept= $_GET['Dept'];
                        $Slot= $_GET['Slot'];
                            
                    
                    ?>
        <div class="row shadow-lg  mb-5 bg-body rounded" style="background:var(--custom); align-items:center;height: 500px;">
        <div class="col-md-6">
            <div style="margin-left:100px;">
                                
            <h2 style="text-decoration:underline; text-decoration-color:orange;">Guest information</h2>
                <br>
                <form action="config/code_appoinment.php" method="post">
                        <input name="name" type="hidden" value="<?php echo $name?>">
                        <input name= "Cat" type="hidden"value="<?php echo $Cat?>">
                        <input name="Dept" type="hidden" value="<?php echo $Dept?>">
                        <input name="Slot" type="hidden" value="<?php echo $Slot ?>">
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input style="border:3px orange solid; width:350px;" name="username" type="Text" class="form-control" id="inputPassword">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Phone:</label>
                            <div class="col-sm-10">
                            <input style="border:3px orange solid; width:350px;" name="number" type="Text" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-10">
                            <input  style="border:3px orange solid; width:350px;" name="email" type="Text" class="form-control" id="inputPassword">
                            </div>
                        </div>
                                        
                        
                        <div style="display:flex; flex-direction:row;">
                        <label for="">Select:</label>
                        <div class="form-check" style="margin-left:50px;">
                    <input class="form-check-input" type="radio" name="visitor_type" id="flexRadioDefault1" value="Student">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Student
                    </label>
                    </div>
                    <div class="form-check" style="margin-left:20px;">
                    <input class="form-check-input" type="radio" name="visitor_type" id="flexRadioDefault1" value="Gardian">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Gardian
                    </label>
                    </div>
                    <div class="form-check" style="margin-left:20px;">
                    <input class="form-check-input" type="radio" name="visitor_type" id="flexRadioDefault1" value="Outsider">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Outsider
                    </label>
                       
                    </div>
                        </div>
                        <br><br>
                        
                       <center>
                           
                       <input type="submit" name="submit" class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">
                       </center>
                       <br>
                       <span>Thanks for being with us</span>
                       </form>
            </div>
            </div>
            <div class="col-md-6" style="background-image: linear-gradient(to top ,#fc604f  , #f08d20 );height:500px; border-radius:0% 0px 0px 0%;">
            <br><br><br>
                <img src="Admin/e-receptiobn_admin/imeges/banner_vistor.jpg" style="height:400px; margin-left:150px;" alt="">
            </div>
       
        </div>
    </div>
    <?php
                         
                  
                    }
        else{
        die("Can not execute query");
        }
?>
</body>
</html>