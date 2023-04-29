<?php 
include('auth.php');

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>
<?php 

$conn = mysqli_connect('localhost','root','','smart reception');

?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Content Header (Page header) -->

      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
         
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update direction</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Direction Update:</h3>

                <a href="direction_read.php"  class="btn btn-primary float-right" >Back</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
               
                   <form action="config/code_direction.php" method="POST" enctype="multipart/form-data" style="padding:20px; width=100px;">
                    <?php
                    if (isset($_GET['id'])){
                        $id= $_GET['id'];
                        $sql= "SELECT * FROM direction WHERE ID=$id";
                        $data = mysqli_query($conn, $sql);
                        $check_result= mysqli_num_rows($data)> 0;
                        if($check_result){
                          while( $rows = mysqli_fetch_array( $data ) ) 
                          {
                            
                    
                    ?>
<input type="hidden" name="id" value="<?php echo $rows ['ID']?>">
<div class="form-group">
    <label for="exampleFormControlInput1">Room Name</label>
    <input name="name" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Room_Name']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Room Number</label>
    <input name="number" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Room_Number']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Direction</label>
    <input name="direction" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Direction']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Input image(Please Choose image again)</label>
    <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $rows ['Map']?>" placeholder="">
</div>



<a href="direction_read.php"><button type="button" class="btn btn-secondary" > View Direction</button></a>
<button type="submit" name="update" class="btn btn-primary"  style=" margin-left:70px;background-image: linear-gradient(to right ,#fc604f , #f08d20);width:300px;">Update Direction</button>
</div>

</form>

<?php
                          }
                        }
}
else{
   die("Can not execute query");
}
?>

</div>

</div>
</div>


<?php include('includes/script.php');?>
<?php include('includes/footer.php');
?>