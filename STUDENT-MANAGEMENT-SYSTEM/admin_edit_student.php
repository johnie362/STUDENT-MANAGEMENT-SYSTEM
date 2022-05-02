<?php
$connection = mysqli_connect("localhost","root","", 'aca', '33060');
	$db = mysqli_select_db($connection,"aca");
	$query = "update students set name='$_POST[name]',guardian_name='$_POST[father_name]',class=$_POST[class],mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no = $_POST[roll_no]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
