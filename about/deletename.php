<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM about")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM about WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script>window.location='indexname.php'</script>