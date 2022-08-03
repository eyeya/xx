<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");


$ID = $_GET['ID'];

$answer = iconv("utf-8", "tis-620", $_POST['answer']);
$question = iconv("utf-8", "tis-620", $_POST['question']);


// echo $details."<br>";
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";

$sql = ("UPDATE qa SET Answer='{$answer}' WHERE ID={$ID}");

// echo $sql."<br>";
$objQuery = mssql_query($sql);



?>

<script type="text/javascript">
  window.location = "indexqa.php";
</script>