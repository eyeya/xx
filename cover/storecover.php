<?php
    //$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
    //random ชื่อรูป
    $name = iconv("utf-8", "tis-620", $_POST['name']);
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $objDB = mssql_select_db("work1");
    $strSQL = "INSERT INTO cover ";
    $strSQL .= "(Image,Name)";
    $strSQL .= "VALUES";
    $strSQL .= "('" . $newfilename . "','" . $name  . "')";
    $objQuery = mssql_query($strSQL);
    //upload file in 
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);



?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=6&Submenu=indexcover";
</script>