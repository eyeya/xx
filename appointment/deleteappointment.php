<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query(" SELECT * FROM appointment")
or die(mssql_error());

$ID = $_GET['ID'];
// $sql = "UPDATE appointment set status='0' WHERE ID = '$ID'";
$sql = "DELETE FROM appointment WHERE ID = '$ID'";
  mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=2&Submenu=indexappointment";
</script>