<?php 

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM comment")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "UPDATE  comment set Status='0' WHERE ID = '$ID'";


  mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=5&Submenu=indexcomment";
</script>