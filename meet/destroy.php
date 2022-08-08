<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query(" SELECT * FROM meet")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM meet WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=2&Submenu=index";
</script>