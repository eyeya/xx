<?php 

$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];

$header = iconv("utf-8","tis-620", $_POST['header']);
$news = iconv("utf-8","tis-620", $_POST['news']);
$day = iconv("utf-8","tis-620", $_POST['day']);


$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO news";
$strSQL .="(Image,Header,News,Day)";
$strSQL .="VALUES";
$strSQL .="('" . $image . "','" . $header . "','" . $news . "','" . $day  . "')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($tmp_name, "../uploads/" . $_FILES['image']['name']);

?>

<script type="text/javascript">
    window.location = "../admin.php";
</script>