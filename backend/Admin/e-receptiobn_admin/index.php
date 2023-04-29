<?php
include('auth.php');
include('includes/header.php');
include('includes/db_connect.php');
include('includes/topbar.php');
include('includes/sidebar.php');?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class=" text-dark"  ">Dashboard</h1>
            
            <?php 
              if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['status']. '</h4>'?></div>
                <?php 
                unset($_SESSION['status']);
              }
            ?>
            <?php 
              if(isset($_SESSION['auth_status'])){
                ?>
                <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['auth_status']. '</h4>'?></div>
                <?php 
                unset($_SESSION['auth_status']);
              }
            ?>



          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->

         <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" >

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php 
              $sql ="SELECT count(id) from  `appoinment` WHERE status='Pending'";
              $data = mysqli_query($conn, $sql);
              $check_result= mysqli_num_rows($data)> 0;
                if($check_result){
                  while( $rows = mysqli_fetch_array( $data ) ) 
                      {
                         ?>
                <h3><?php echo $rows ['count(id)']?></h3>

                <p>Pending Appoinments</p>
                <?php
    }
}
else{
   die("Can not execute query");
}
?>
              </div>
              <div class="icon">
              <i class="fas fa-calendar-check"></i>
              
              </div>
              <a href="appointment_read.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
              $sql ="SELECT count(id) from  `visistor`";
              $data = mysqli_query($conn, $sql);
              $check_result= mysqli_num_rows($data)> 0;
                if($check_result){
                  while( $rows = mysqli_fetch_array( $data ) ) 
                      {
                         ?>
                <h3><?php echo $rows ['count(id)']?></h3>

                <p>Visitors</p>
                <?php
    }
}
else{
   die("Can not execute query");
}
?>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="visitor_read.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php 
              $sql ="SELECT count(id) from  `faculty/member` where Role='F'";
              $data = mysqli_query($conn, $sql);
              $check_result= mysqli_num_rows($data)> 0;
                if($check_result){
                  while( $rows = mysqli_fetch_array( $data ) ) 
                      {
                         ?>
                           <h3><?php echo $rows ['count(id)']?></h3>

                            <p>Faculty Members</p>
                <?php
    }
}
else{
   die("Can not execute query");
}
?>
              </div>
              <div class="icon">
              <i class="far fa-user"></i>
              </div>
              <a href="member_read.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      



         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include('includes/script.php');?>
<?php include('includes/footer.php');
?>