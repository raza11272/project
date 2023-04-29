
<?php 
include('auth.php');

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>
<?php 

$conn = mysqli_connect('localhost','root','','smart reception');

?>
<html>
<div class="content-wrapper">

<!--User Modal -->
<div class="modal fade" id="ProModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hey there!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="config/code_member.php" method="POST" enctype="multipart/form-data" style="padding:20px; width=100px;">


<div class="form-group">
    <label for="exampleFormControlFile1">Input image</label>
    <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
</div>

<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name="name" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Dept</label>
    <input name="Dept" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Room number</label>
    <input name="number" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Phone number</label>
    <input name="p_number" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Category</label>
    <input name="cat" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Slot - 1</label>
    <input name="s1" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Slot - 2</label>
    <input name="s2" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Slot - 3</label>
    <input name="s3" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input name="username" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input name="password" type="password"  class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Role</label>
    <select name="role" class="form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="F">Faculty</option>
      <option value="A">Admin</option>
      
    </select>
</div>









      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" name="submit" class="btn btn-primary">Yes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Delete Modal -->
<div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hey there!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
<form action="config/code_member.php" method="POST" enctype="multipart/form-data" style="padding:20px;">
<div class="modal-body">
            <input type="text" name="d_id" class="delete_id">
            <p>
              Are you sure. you want to delete?
            </p>
</div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" name="delete" class="btn btn-primary">Yes</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!-- Content Header (Page header) -->
      <!-- Content Header (Page header) -->

      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            <?php 
              if(isset($_SESSION['status'])){
                echo'<h4>'.$_SESSION['status']. '</h4>';
                unset($_SESSION['status']);
              }
            ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">View Members</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Member List:</h3>

                <a href="#" data-toggle="modal" data-target="#ProModal" class="btn btn-success float-right rounded-pill"  style=" background-image: linear-gradient(to right ,#fc604f , #f08d20);width:150px;">Add Member</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Image</th>
                    <th>Name</th>
                    <th>Dept</th>
                    <th>Room</th>
                    <th>Designation</th>
                    <th>Slot</th>
                    
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Role</th>
                    
                    
                    <th>Actions</th>
                  </tr>
                  </thead>

                  <tbody>
                  <tr>
                  <?php 
$sql ="SELECT * from `faculty/member`";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>
                    <!-- <td><?php echo $rows ['ID']?></td> -->
                   
                    <td><img style="width:90px;" src="imeges/faculty_members/<?php echo $rows ['image']?>"></td>
                    <td><?php echo $rows ['Name']?></td>
                    <td><?php echo $rows ['Dept']?></td>
                    <td><?php echo $rows ['Room_Number']?></td>
                    <td><?php echo $rows ['Category']?></td>
                    <td><?php echo $rows ['Slot_1']?><br><?php echo $rows ['Slot_2']?><br><?php echo $rows ['Slot_3']?></td>
                    
                    <td><?php echo $rows ['User_Name']?></td>
                    <td><?php echo $rows ['Password']?></td>
                    <td><?php echo $rows ['Role']?></td>
                  

                    
                    <td><a href="member_update.php?id=<?php echo $rows ['ID']?>"  class="btn btn-primary rouded-pill"style=" background-image: linear-gradient(to right ,#fc604f , #f08d20);width:100px;" >Update</a>
                    <button data-toggle="modal" data-target="#delModal" type="button" value="<?php echo $rows ['ID']?>"  class="btn btn-danger deletebtn" style="width: 100px;" value >Delete</button></td>
                  </tr>
                  <?php
    }
}
else{
   die("Can not execute query");
}
?>
</tbody>
</table>

</div>

</div>

</div>

</html>
<?php include('includes/script.php');?>
<script>
  $(document).ready(function(){
    $('.deletebtn').click(function(e){
      e.preventDefault();
      var id =$(this).val();
      // console.log(id);
      $('.delete_id').val(id);
      $('#DeleteModal').modal('show');
    });
  });
</script>
<?php include('includes/footer.php');

?>