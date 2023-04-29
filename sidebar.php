<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get an appoinment</title>
</head>
<body >
<div ><h1>UIU Faculty   Members</h1><div style="margin-top:105px; " class="container">
<div style="margin-top:150px; " class="container">
<h4>Filter By:</h4>
    <div class="input-group mb-3">
    
    <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">Department</button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="member_sort.php?Dept=CSE">CSE</a></li>
        <li><a class="dropdown-item" href="member_sort.php?Dept=EEE">EEE</a></li>
        <li><a class="dropdown-item" href="member_sort.php?Dept=BBA">BBA</a></li>
        <li><a class="dropdown-item" href="member_sort.php?Dept=Civil">Civil</a></li>
        <li><a class="dropdown-item" href="members.php">All</a></li>
        
    
    </ul>
    
 
    </div>
    <div class="input-group mb-3">
    <button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:130px;">Faculty<?php echo "   "?></button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="member_sort_c.php?Category=Lecturer">Lecturer</a></li>
        <li><a class="dropdown-item" href="member_sort_c.php?Category=Professor">Professor</a></li>
        <li><a class="dropdown-item" href="member_sort_c.php?Category=Asst. Professor">Asst. Professor</a></li>
        <li><a class="dropdown-item" href="members.php">All</a></li>
        
        
    </ul>

    </div>
</div>
</div>


</body>
</html>