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
    <title>Document</title>
</head>
<body>
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
<div class="container">
<?php 
              if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['status']. '</h4>'?></div>
                <?php 
                unset($_SESSION['status']);
              }
            ?>
    <div class="row">
        <div class="col-md-12">
            <br><br>
        <table class="table">
  <thead class="table-dark">
 
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Visitor Type</th>
                    
                    <th>Slot</th>
                    <th>Booking Time</th>
                    <th>Action</th>
                    
                    
                  </tr>
                  </thead>

                  <tbody>
                  <tr>
                  <?php 
 $sql ="SELECT * from appoinment WHERE `Faculty Name` ='$name'AND status='Pending' ";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>
                    <td><?php echo $rows ['ID']?></td>
                    <td><?php echo $rows ['Visitor Name']?></td>
                    <td><?php echo $rows ['Visitor_Number']?>
                    </td>
                  
                    <td><?php echo $rows ['visitor_type']?></td>
                    
                    
                    <td><?php echo $rows ['Slot']?></td>
                    <td><?php echo $rows ['appointment_time']?></td>
                    <form action="config/code_member.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $rows ['ID']?>">
                    <td><button type="submit" name="done" class=" btn  btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">Done</button></td>
                    </form>
                   
                  </tr>
                  <?php
    }
}
else{
   echo "No appoinment for today";
}
?>
</tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>
<?php include('includes/script.php');?>
   