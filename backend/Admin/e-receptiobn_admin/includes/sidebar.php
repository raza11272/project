  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="width:250px;">
    <!-- Brand Logo -->
    <a  class="brand-link " style="background:black; color:white;" >
      <img src="assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text  font-weight-light">UIU-E Reception</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-image: linear-gradient(to right ,#fc604f , #f08d20);">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">


      </div>

      <!-- Sidebar Menu -->
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color:black;"></i>
              <p style="color:black;">
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book" style="color:black;"></i>
              <p style="color:black;">
                Direction
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="direction_create.php" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:black;"></i>
                  <p style="color:black;" >Add Direction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="direction_read.php" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:black;"></i>
                  <p style="color:black;" >View Direction</p>
                </a>
              </li>

            </ul>
           
 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user" style="color:black;" ></i>
              <p style="color:black;">
                Members
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_member.php" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:black;"></i>
                  <p style="color:black;" >Add Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="member_read.php" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:black;"></i>
                  <p style="color:black;" >View Members</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
           
            <i class="nav-icon fas fa-calendar-check" style="color:black;" ></i>
              <p style="color:black;">
                Appoinments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="appointment_read.php" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:black;"></i>
                  <p style="color:black;" >View Appoinments</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            
            <i class="nav-icon fas fa-id-badge" style="color:black;" ></i>
              <p style="color:black;">
                Visitors
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="visitor_read.php" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:black;"></i>
                  <p style="color:black;" >View Vsitors</p>
                </a>
              </li>

            </ul>
          </li>
 
</ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>