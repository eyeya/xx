<?php
if (!empty($_FILES['image']['tmp_name']) && !empty($_FILES['filename']['tmp_name'])) {
    $details = iconv("utf-8", "tis-620", $_POST['details']);
    $day = iconv("utf-8", "tis-620", $_POST['day']);
    //random image
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    //random file
    $tmp_name2 = $_FILES['filename']['tmp_name'];
    $temp2 = explode(".", $_FILES["filename"]["name"]);
    $newfilename2 = round(microtime(true)) . '.' . end($temp2);
    //insert
    $objDB = mssql_select_db("work1");
    $strSQL = "INSERT INTO meet ";
    $strSQL .= "(image,details,day,filename,status)";
    $strSQL .= "VALUES";
    $strSQL .= "('" . $newfilename . "','" . $details . "','" . $day  . "','" . $newfilename2 . "','1')";
    $objQuery = mssql_query($strSQL);
    //upload file in folder
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
    move_uploaded_file($_FILES["filename"]["tmp_name"], "../uploads/" . $newfilename2);
} else if (!empty($_FILES['image']['tmp_name'])) {
    
    $day = iconv("utf-8", "tis-620", $_POST['day']);
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $details = iconv("utf-8", "tis-620", $_POST['details']);

    $objDB = mssql_select_db("work1");
    $strSQL = "INSERT INTO meet";
    $strSQL .= "(image,day,details,status)";
    $strSQL .= "VALUES";
    $strSQL .= "('" . $newfilename . "','" . $details . "','" . $day  . "','1')";
    $objQuery = mssql_query($strSQL);

    //upload file in folder
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
} else if (!empty($_FILES['filename']['tmp_name'])) {
    $details = iconv("utf-8", "tis-620", $_POST['details']);
    $day = iconv("utf-8", "tis-620", $_POST['day']);
    $tmp_name2 = $_FILES['filename']['tmp_name'];
    $temp2 = explode(".", $_FILES["filename"]["name"]);
    $newfilename2 = round(microtime(true)) . '.' . end($temp2);
    
    $objDB = mssql_select_db("work1");
    $strSQL = "INSERT INTO meet";
    $strSQL .= "(details,day,filename,status)";
    $strSQL .= "VALUES";
    $strSQL .= "('" . $details . "','" . $day  . "','" . $newfilename2 . "','1')";
    $objQuery = mssql_query($strSQL);

    //upload file in folder

    move_uploaded_file($_FILES["filename"]["tmp_name"], "../uploads/" . $newfilename2);
} ?>


<script type="text/javascript">
    window.location = "../admin.php?Menu=2&Submenu=index";
</script>