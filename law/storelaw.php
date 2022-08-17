
<?php
$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$filename = iconv("utf-8", "tis-620", $_FILES['filename']['name']);
$tmp_name=$_FILES['image']['tmp_name'];

$details = iconv("utf-8", "tis-620", $_POST['details']);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO law";
$strSQL .= "(image,details,filename,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $image . "','" . $details . "','" . $filename . "','1')";
$strSQL .= mssql_query($strSQL);

//upload file in folder
move_uploaded_file($tmp_name,"../uploads/".$_FILES['image']['name']);
move_uploaded_file($tmp_name,"../uploads/".$_FILES['filename']['name']);

?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=3&Submenu=indexlaw";
</script>