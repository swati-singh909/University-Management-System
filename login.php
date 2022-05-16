 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Login Page</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="style.css">
     <style type="text/css">
        .button{
          background-color:  #343a40;
          color: white;
          text-align: center;
          width: 20%;
          font-size: 20px;
         padding: 15px 10px 15px 10px;
         border-radius: 25px;
         }
     }
 </style>
      <?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"ums");
    ?>
 </head>
 <body>
        <nav>
            <label class="logo">University Management</label>
            <ul>
                <li><a class="active" href="#">HOME</a></li>
                <li><a href="admin_login.php">ADMIN</a></li>
            </ul>
        </nav>
   <center>
   	<div class="ums"><h3>University Management System</h3>
        <a><strong>Made by: Swati Singh
            <br>2019021156<br>B.Tech(CSE Sec B)</strong></a><br>
            <br>
   	<form action="" method="post">
   		<input type="submit" name="teacher_login" value="Teacher Login" class="button">
   		<input type="submit" name ="student_login" value=" Student Login" class="button">
   	</form>
    </div>
   	<?php
   	    if(isset($_POST['teacher_login'])){
   	    	header("Location:teacher_login.php");
   	    }
   	    if(isset($_POST['student_login'])){
   	    	header("Location:student_login.php");
   	    }
   	    ?>

   </center>
   
 </body>
 </html>