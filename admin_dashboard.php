<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
  	<style type="text/css">
  	    body{
          background-image: url(img.jpg);
         }
         #header{
  	    	height: 10%;
  	    	width: 100%;
  	    	top: 2%;
  	    	background-color: black;
  	    	position: fixed;
  	    	color: white;

         }
         #left_side{
         	height: 75%;
         	width: 15%;
         	top: 20%;
         	position: fixed;
         } 
         #right_side{
         	height: 75%;
         	width: 80%;
         	background-color: whitesmoke;
         	position: fixed;
         	left: 17%;
         	top: 21%;
         	color: red;
         	border: solid 4px purple;
         }
         #top-span{
         	top: 15%;
         	width: 80%;
         	left: 17%;
         	position: fixed;
         }
         #colorof{
          color: white;
         }
         .button{
          background-color:  #343a40;
          color: white;
          text-align: center;
          width: 100%;
          font-size: 20px;
         padding: 15px 20px 15px 20px;
         border-radius: 25px;
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
                <li><a href="login.php">HOME</a></li>
                <!-- <li id="colorof">Email:<?php echo $_SESSION['email'];?></li> -->
                li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    <!--  <div id="header">
     	<center><strong>University Management System &nbsp;&nbsp;&nbsp;&nbsp;</strong>Email:<?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name:<?php echo $_SESSION['name'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=logout.php>Logout</a>
     	</center>
     </div> -->
     <!-- <span id="top-span"><marquee>Note:- This portal is open till 10 April......... plz edit your information if wrong,</marquee></span> -->
     <div id="left_side"><br><br><br>
     	<form action="" method="post">
     		<table>
     			<tr>
     				<td>
     					<input type="submit" name="search_student" value="Search Student" class="button">
     				</td>
     			</tr>
     			<tr>
     				<td>
     					<input type="submit" name="edit_student" value="Edit Student"class="button">
     				</td>
     			</tr>
     			<tr>
     				<td>
     					<input type="submit" name="add_student" value="Add Student"class="button">
     				</td>
     			</tr>
     			<tr>
     				<td>
     					<input type="submit" name="delete_student" value="Delete Student"class="button">
     				</td>
     			</tr>
     		</table>
     	</form>

     </div>
     <div id="right_side"><br><br><center>
          <div id="demo">
               <?php
               if(isset($_POST['search_student']))
               {
                    ?>
                    <center>
                         <form action="" method="post">
                              Enter Roll No:
                              <input type="text" name="roll_no">
                              <input type="submit" name="search_by_roll_no_for_search" value="Search">
                         </form>
                    </center>
                    <?php

               }
               if(isset($_POST['search_by_roll_no_for_search']))
               {
                 $query = "select * from students where roll_no = '$_POST[roll_no]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <table>
                         <tr>
                              <td>
                                   <b>Roll No:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" value="<?php echo $row['roll_no'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" value="<?php echo $row['name'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Fathers Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" value="<?php echo $row['father_name'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Attendance:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" value="<?php echo $row['attendance'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Marks:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" value="<?php echo $row['marks'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Email:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" value="<?php echo $row['email'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                          
                         <tr>
                              <td>
                                   
                                   <td>

                                   </td>
                              </td>
                         </tr>
                    </table>
                    <?php
                 }
               }
               ?>
               <?php
               if(isset($_POST['edit_student']))
               {
                    ?>
                    <center>
                         <form action="" method="post">
                              Enter Roll No:
                              <input type="text" name="roll_no">
                              <input type="submit" name="search_by_roll_no_for_edit" value="Edit">
                         </form>
                    </center>
                    <?php

               }
               if(isset($_POST['search_by_roll_no_for_edit']))
               {
                 $query = "select * from students where roll_no = '$_POST[roll_no]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="admin_edit_student.php" method="post">
                    <table>
                         <tr>
                              <td>
                                   <b>Roll No:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="name" value="<?php echo $row['name'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Fathers Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="father_name" value="<?php echo $row['father_name'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Attendance:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="attendance" value="<?php echo $row['attendance'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Marks:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="marks" value="<?php echo $row['marks'];?>" >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Email:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="email" value="<?php echo $row['email'];?>"  >
                                   </td>
                              </td>
                         </tr>
                          
                        <br><br>
                         <tr>
                              <td></td>
                              <td><input type="submit" name="edit" value="Save">
                              </td>
                         </tr>

                    </table>
               </form>
                    <?php
                 }
               }
               ?>
               <?php 
                  if(isset($_POST['add_student']))
                  {
                    ?>
                    <center><h4>Fill the given details:</h4></center>
                    <form action="add_student.php" method="post">
                         <table>
                              <tr>
                                   <td>Roll No:</td>
                                   <td>
                                        <input type="text" name="roll_no" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Name:</td>
                                   <td>
                                        <input type="text" name="name" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Fathers name:</td>
                                   <td>
                                        <input type="text" name="father_name" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Attendance:</td>
                                   <td>
                                        <input type="text" name="attendance" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Marks:</td>
                                   <td>
                                        <input type="text" name="marks" required>
                              </tr>
                              <tr>
                                   <td>Email:</td>
                                   <td>
                                        <input type="text" name="email" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Password:</td>
                                   <td>
                                        <input type="text" name="password" required>
                                   </td>
                              </tr>
                              
                              <tr>
                                   <td>
                                        <td>
                                             <input type="submit" name="add" value="Add Student">
                                        </td>
                                   </td>
                              </tr>
                         </table>
                         
                    </form>
                  
                  <?php
             }



               ?>
               <?php 
               if(isset($_POST['delete_student'])){
                    ?>
                    <center>
                         <h4>Enter Roll No to delete Student</h4>
                         <form action="delete_student.php" method="post">
                              Roll No:
                              <input type="text" name="roll_no">
                              <input type="submit" name="search_by_roll_no_for_delete" value="Delete Student">



                         </form>
                    </center>
                    <?php
               }





               ?>




          </div></center>
     </div>
</body>
</html>