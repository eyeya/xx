<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query(" SELECT * FROM appointment")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM appointment WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script>window.location='indexappointment.php'</script>