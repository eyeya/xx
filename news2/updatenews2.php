<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");

$ID = $_GET['ID'];

$header = iconv("utf-8", "tis-620", $_POST['header']);
$news = iconv("utf-8", "tis-620", $_POST['news']);
$day = iconv("utf-8", "tis-620", $_POST['day']);

$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];

$sql = ("UPDATE news SET Header='{$header}', News='{$news}', Day='{$day}' WHERE ID='{$ID}'");

$objQuery = mssql_query($sql);

//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    move_uploaded_file($tmp_name, "../uploads/" . $_FILES['image']['name']);
}

?>
<script type="text/javascript">
    window.location = "indexnews2.php";
</script>