
<?php

$filename = iconv("utf-8", "tis-620", $_FILES['filename']['name']);
$tmp_name=$_FILES['image']['tmp_name'];
$details = iconv("utf-8", "tis-620", $_POST['details']);
//random ชื่อรูป
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO law";
$strSQL .= "(image,details,filename,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $newfilename . "','" . $details . "','" . $filename . "','1')";
$strSQL .= mssql_query($strSQL);

//upload file in folder
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
move_uploaded_file($tmp_name,"../uploads/".$_FILES['filename']['name']);

?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=3&Submenu=indexlaw";
</script>