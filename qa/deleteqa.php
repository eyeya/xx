<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM qa")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM qa WHERE ID = '$ID'";
// $sql = "UPDATE  qa set status='0' WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=5&Submenu=indexqa";
</script>