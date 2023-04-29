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
              <li class="breadcrumb-item active">Update member</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Member Update:</h3>

                <a href="member_read.php"  class="btn btn-primary float-right" >Back</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
               
                   <form action="config/code_member.php" method="POST" enctype="multipart/form-data" style="padding:20px; width=100px;">
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
<input type="hidden" name="id" value="<?php echo $rows ['ID']?>">
<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name="name" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Name']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Department</label>
    <input name="Dept" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Dept']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Room_Number</label>
    <input name="number" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Room_Number']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Phone_Number</label>
    <input name="p_number" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Phone_Number']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Category</label>
    <input name="cat" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Category']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Slot_1</label>
    <input name="s1" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Slot_1']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Slot_2</label>
    <input name="s2" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Slot_2']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Slot_3</label>
    <input name="s3" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Slot_3']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">User_Name</label>
    <input name="username" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['User_Name']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input name="password" type="password"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Password']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Role(F=Faculty && A=Admin)</label>
    <input name="role" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['Role']?>" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Input image(Please Choose image again)</label>
    <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $rows ['image']?>" placeholder="">
</div>



<a href="member_read.php"><button type="button" class="btn btn-secondary" > View Member</button></a>
<button type="submit" name="update" class="btn btn-primary">Update Member</button>
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