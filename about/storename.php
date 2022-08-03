<?php

$position = iconv("utf-8", "tis-620", $_POST['position']);
$name = iconv("utf-8", "tis-620", $_POST['name']);
$lastname = iconv("utf-8", "tis-620", $_POST['lastname']);
$department = iconv("utf-8", "tis-620", $_POST['department']);
$role = iconv("utf-8", "tis-620", $_POST['role']);

$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];


// echo $details."<br>";
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO about ";
$strSQL .= "(Image,Position,Name,Lastname,Department,Role)";
$strSQL .= "VALUES";
$strSQL .= "('" . $image . "','" . $position . "','" . $name  . "','" . $lastname . "','" . $department . "','" . $role . "')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($tmp_name, "../uploads/" . $_FILES['image']['name']);

?>

<script type="text/javascript">
    window.location = "indexname.php";
</script>