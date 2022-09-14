<?php 



$header = iconv("utf-8","tis-620", $_POST['header']);
$news = iconv("utf-8","tis-620", $_POST['news']);
$day = iconv("utf-8","tis-620", $_POST['day']);
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO news";
$strSQL .="(Image,Header,News,Day,status)";
$strSQL .="VALUES";
$strSQL .="('" . $image . "','" . $header . "','" . $news . "','" . $day  . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);

?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=1&Submenu=indexnews2";
</script>