<?php

$header = iconv("utf-8", "tis-620", $_POST['header']);
$news = iconv("utf-8", "tis-620", $_POST['news']);
$day = iconv("utf-8", "tis-620", $_POST['day']);
$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO news";
$strSQL .= "(header,news,day,image,status)";
$strSQL .= "VALUES";



$countimagenews = count($_FILES['image']["name"]); //count คือการเอามนับ
$allImage = null;

for ($i = 0; $i < $countimagenews; $i++) { 
    $tmp_name = $_FILES['image']['tmp_name'][$i];
    $temp = explode(".", $_FILES["image"]["name"][$i]);
    $newimagenews = round(microtime(true)) . $i .'.'. end($temp);
    $allimagenews[] = $newimagenews;


    //upload file in folder
    if (!move_uploaded_file($_FILES['image']['tmp_name'][$i], "../uploads/" . $newimagenews)); {
    }
}
$imagenews = join(',', $allimagenews); //่joinด้วย,

$strSQL .= "('" . $header . "','" . $news . "','" . $day . "','" . $imagenews . "','1')";
$strSQL .= mssql_query($strSQL);

?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=1&Submenu=indexnews2";
</script>