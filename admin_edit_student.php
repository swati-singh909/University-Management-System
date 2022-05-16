<?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"ums");
        $query = "update students set name='$_POST[name]',father_name='$_POST[father_name]',attendance='$_POST[attendance]',marks='$_POST[marks]',email='$_POST[email]' where roll_no= $_POST[roll_no]";
        $query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Details Edited Successfully");
	window.location.href="admin_dashboard.php";
</script>