<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");


$ID = $_GET['ID'];

$details = iconv("utf-8", "tis-620", $_POST['details']);

$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$filename = iconv("utf-8", "tis-620", $_FILES['filename']['name']);
$tmp_name = $_FILES['image']['tmp_name'];

// echo $details."<br>";
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";

$sql = ("UPDATE imperative SET Details='{$details}' WHERE ID={$ID}");

// echo $sql."<br>";
$objQuery = mssql_query($sql);

//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    move_uploaded_file($tmp_name, "../uploads/" . $_FILES['image']['name']);
}

//เช็คว่ามีไฟล์งานมั้ย
if (!empty($_FILES['filename']['tmp_name'])) {
    move_uploaded_file($tmp_name, "../uploads/" . $_FILES['filename']['name']);
}

?>

<script type="text/javascript">
  window.location = "indeximperative.php";
</script>