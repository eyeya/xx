<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");
$ID = $_GET['ID'];
$details = iconv("utf-8", "tis-620", $_POST['details']);

if (!empty($_FILES['image']['tmp_name'])) {
    $path = "uploads/";
    $image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
    $sql = ("UPDATE labor SET  Image='{$newfilename}' WHERE ID={$ID}");
    $objQuery = mssql_query($sql);
}

//เช็คว่ามีไฟล์งานมั้ย
if (!empty($_FILES['filename']['tmp_name'])) {
    $path = "uploads/";
    $filename = iconv("utf-8", "tis-620", $_FILES['filename']['name']);
    $tmp_name2 = $_FILES['filename']['tmp_name'];
    $temp2 = explode(".", $_FILES["filename"]["name"]);
    $newfilename2 = round(microtime(true)) . '.' . end($temp2);
    move_uploaded_file($_FILES["filename"]["tmp_name"], "../uploads/" . $newfilename2);
    $sql = ("UPDATE labor SET  filename='{$newfilename2}' WHERE ID={$ID}");
    $objQuery = mssql_query($sql);
}

$sql = ("UPDATE labor SET Details='{$details}' WHERE ID={$ID}");
$objQuery = mssql_query($sql);

?>

<script type="text/javascript">
window.location = "../admin.php?Menu=3&Submenu=indexlabor";
</script>