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
    <title>Get an appoinment</title>
    
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
</head>
<body >
    <div class="row">
      <div class="col-md-2" style="background-color:#f08e1f; height:650px;">
            <?php include "sidebar.php" ?>
      </div>
      <div class="col-md-10" style="width: 1200px;">
  
      <div class="container slider" style="margin-top:-250px; margin-left: 220px;">
                  <?php 

                $sql ="SELECT id, image, Name ,Dept,Category from `faculty/member` WHERE Role='F' ";
                $data = mysqli_query($conn, $sql);
                $check_result= mysqli_num_rows($data)> 0;
                if($check_result){
                  while( $rows = mysqli_fetch_array( $data ) ) 
                  {
                      ?>

                  <div class="card" style="height:500px; background: linear-gradient(to top, white 70%, lightgray 50%); margin-left:40px;">

                 <center><a href="apnt.php?id=<?php echo $rows ['id']?>"> <img src="Admin/e-receptiobn_admin/imeges/faculty_members/<?php echo $rows ['image']?>" class="card-img-center" style="height:200px;width:200px; border-radius:100%;margin-top:20px;" alt="..."></a></center>
                  <div class="card-body" style="color:black;text-align:center;">

                            <span class="fw-bold" ><?php echo $rows ['Name']?></span>
                            <br>
                            <span><?php echo $rows ['Dept']?></span>
                            <br>
                            <span>
                            <?php echo $rows ['Category']?></span>
                  </div>

                </div>

<?php
    }
}
else{
  ?>	
<h2  style="color:white;font-size:35px;">Datas are  currently not available.</h2> 
<?php
}
?>	
  </div>
</div>
   
      
     </div>
          
   





 
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
          $('.slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  
 
  adaptiveHeight:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
	
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>