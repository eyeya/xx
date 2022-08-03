<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM news")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM news WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script>window.location='indexnews2.php'</script>