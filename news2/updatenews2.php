<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");

$ID = $_GET['ID'];

$header = iconv("utf-8", "tis-620", $_POST['header']);
$news = iconv("utf-8", "tis-620", $_POST['news']);
$day = iconv("utf-8", "tis-620", $_POST['day']);


//เช็คว่ามีรูปมั้ย
$countimagenews = count($_FILES['image']["name"]); //count คือการเอามนับ
$allimagenews = null;

for ($i = 0; $i < $countimagenews; $i++) {
    $tmp_name = $_FILES['image']['tmp_name'][$i];
    $temp = explode(".", $_FILES["image"]["name"][$i]);
    $newimagenews = round(microtime(true)) . $i . '.' . end($temp);
    $allimagenews[] = $newimagenews;
    
    if (!move_uploaded_file($_FILES['image']['tmp_name'][$i], "../uploads/" . $newimagenews)); {
    }
}
$imagenews = join(',', $allimagenews); //่joinด้วย,

$sql = ("UPDATE news SET  Header='{$header}', News='{$news}', Day='{$day}' WHERE ID='{$ID}'");
$objQuery = mssql_query($sql);

if (!empty($_FILES['image']['tmp_name'])) {
    $sql = ("UPDATE news SET Image='{$imagenews}'WHERE ID='{$ID}'");
    $objQuery = mssql_query($sql);
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" .$imagenews);}
?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=1&Submenu=indexnews2";
</script>