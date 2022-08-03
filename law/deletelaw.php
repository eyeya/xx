<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query(" SELECT * FROM law")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM law WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script>window.location='indexlaw.php'</script>