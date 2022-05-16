 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Login Page</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin_login_style.css">

 </head>
 <body>
   <div class="center">
    <div class="container">
    <div class="text">STUDENT LOGIN</div><br>
    <form action="" method="post">
      <center>Email: <input type="text" name="email" required><br><br>
      Password: <input type="password" name ="password" required><br><br>
      <input type="submit" name="submit">
    </center>
    </form>
    <?php
    session_start();
      if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"ums");
        $query = "select * from students where email = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
          if($row['email'] == $_POST['email']){
            if($row['password'] == $_POST['password']){
              $_SESSION['email']=$row['email'];
              $_SESSION['name']=$row['name'];
              header("Location:student_dashboard.php");
            }
            else{
              echo "Wrong Password";
            }
          }
          else{
            echo "Wrong email ID";
          }
        }
      } 
    ?>
    
  

   </center>
 </body>
 </html>