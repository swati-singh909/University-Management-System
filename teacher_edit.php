<?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"ums");
        $query = "update students set attendance='$_POST[attendance]',marks='$_POST[marks]' where roll_no= $_POST[roll_no]";
        $query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Details Edited Successfully");
	window.location.href="login.php";
</script>