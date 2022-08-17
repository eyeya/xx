<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");


$ID = $_GET['ID'];

$answer = iconv("utf-8", "tis-620", $_POST['answer']);
$question = iconv("utf-8", "tis-620", $_POST['question']);
$dayout= iconv("utf-8", "tis-620", $_POST['dayout']);


// echo $details."<br>";
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";
$dayout=date("Y-m-d");
$sql = ("UPDATE qa SET Answer='{$answer}', dayout='$dayout', status='1' WHERE ID={$ID}");


// echo $sql."<br>";
$objQuery = mssql_query($sql);



?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=5&Submenu=indexqa";
</script>