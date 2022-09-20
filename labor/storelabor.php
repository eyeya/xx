<?php

// $filename = iconv("tis-620","utf-8",  $_FILES['filename']['name']); //ไฟล์ไทย
//random ชื่อรูป
if (!empty($_FILES['image']['tmp_name']) && !empty($_FILES['filename']['tmp_name']))
 {
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

$tmp_name2 = $_FILES['filename']['tmp_name'];
$temp2 = explode(".", $_FILES["filename"]["name"]);
$newfilename2 = round(microtime(true)) . '.' . end($temp2);

$details = iconv("utf-8", "tis-620", $_POST['details']);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO labor";
$strSQL .= "(image,details,filename,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $newfilename . "','" . $details . "','" . $newfilename2 . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
move_uploaded_file($_FILES["filename"]["tmp_name"], "../uploads/" . $newfilename2);
}
else if (!empty($_FILES['image']['tmp_name']))
 {
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$details = iconv("utf-8", "tis-620", $_POST['details']);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO labor";
$strSQL .= "(image,details,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $newfilename . "','" . $details . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
} 
else if (!empty($_FILES['filename']['tmp_name']))
 {


$tmp_name2 = $_FILES['filename']['tmp_name'];
$temp2 = explode(".", $_FILES["filename"]["name"]);
$newfilename2 = round(microtime(true)) . '.' . end($temp2);
$details = iconv("utf-8", "tis-620", $_POST['details']);
$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO labor";
$strSQL .= "(details,filename,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $details . "','" . $newfilename2 . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder

move_uploaded_file($_FILES["filename"]["tmp_name"], "../uploads/" . $newfilename2);
}

?>


<script type="text/javascript">
    window.location = "../admin.php?Menu=3&Submenu=indexlabor";
</script>