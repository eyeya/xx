<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query(" SELECT * FROM labor")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM labor WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=3&Submenu=indexlabor";
</script>