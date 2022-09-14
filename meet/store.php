<?php
$details = iconv("utf-8", "tis-620", $_POST['details']);
$day = iconv("utf-8", "tis-620", $_POST['day']);


$filename = iconv("utf-8", "tis-620", $_FILES['filename']['name']);
$tmp_name=$_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

// echo $details."<br>";
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO meet ";
$strSQL .= "(image,details,day,filename,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $newfilename . "','" . $details . "','" . $day  . "','" . $filename . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
move_uploaded_file($tmp_name,"../uploads/".$_FILES['filename']['name']);

?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=2&Submenu=index";
</script>