<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{	document.write("<?php
        $connection = mysqli_connect("localhost","root","", 'aca', '33060');
		$db = mysqli_select_db($connection,"aca");
		$query = "delete from students where roll_no = $_POST[roll_no]";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "admin_dashboard.php";
	}
	else
	{
		window.location.href = "admin_dashboard.php";
	}
</script>
