<?php 
session_start();
$conn = mysqli_connect('localhost','root','','smart reception');
if(!$conn){
  echo mysqli_connect_error();
}




if(isset($_POST['login'])){
 
  $user_name =$_POST['username'];
  $password =$_POST['password'];
  
  

$sql= "SELECT * From `faculty/member` where User_Name='$user_name' AND Password='$password' LIMIT 1";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
        if($check_result){
        while( $rows = mysqli_fetch_array( $data ) ) 
        {
            
                            $id=$rows ['ID'];
                            $name=$rows ['Name'];
                            $user_name=$rows ['User_Name'];
                            $password=$rows ['Password'];
                            $role=$rows ['Role'];
        }
        $_SESSION['auth']= true;
        $_SESSION['auth_user']= [
            'id'=>$id,
            'name'=>$name,
            'user_name'=>$user_name,
            'password'=>$password


        ];
        if( $role == 'A'){
       $_SESSION['status']="Log In Successfully";
            header("Location: ../index.php");
        }else if($role == 'F'){
            $_SESSION['status']="Log In Successfully";
            header("Location: ../faculty_dashboard.php");
        }
}
        
        else{
            $_SESSION['status']="Invalid user name or password";
            header("Location: ../../../log_in.php");
        }
    }
else{

  header("Location: ../log_in.php");
}

if(isset($_POST['logout'])){

  // session_destroy();
  unset($_SESSION['auth']);
  unset($_SESSION['auth_user']);
  $_SESSION['lout_status']="Logged out Successfully";
  header('Location: ../../../log_in.php');
  exit(0);
}

?>