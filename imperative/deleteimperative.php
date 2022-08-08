<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query(" SELECT * FROM imperative")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM imperative WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=4&Submenu=indeximperative";
</script>