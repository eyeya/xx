 
  <?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");


$ID = $_GET['ID'];

$details = iconv("utf-8", "tis-620", $_POST['details']);

$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$filename = iconv("utf-8", "tis-620", $_FILES['filename']['name']);
$tmp_name=$_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);



$sql = ("UPDATE law SET Image='{$newfilename}' , Details='{$details}', filename='{$filename}'  WHERE ID={$ID}");

// echo $sql."<br>";
$objQuery = mssql_query($sql);

//เช็คว่ามีรูปมั้ย
if(!empty($_FILES['image']['tmp_name'])){
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);   
}

//เช็คว่ามีไฟล์งานมั้ย
if(!empty($_FILES['filename']['tmp_name'])){
    move_uploaded_file($tmp_name,"../uploads/".$_FILES['filename']['name']);
}

?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=3&Submenu=indexlaw";
</script>