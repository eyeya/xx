<?php
if (!empty($_FILES['image']['tmp_name'])) {
    $position = iconv("utf-8", "tis-620", $_POST['position']);
    $name = iconv("utf-8", "tis-620", $_POST['name']);
    $lastname = iconv("utf-8", "tis-620", $_POST['lastname']);
    $department = iconv("utf-8", "tis-620", $_POST['department']);
    $role = iconv("utf-8", "tis-620", $_POST['role']);

    //$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
    //random ชื่อรูป
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $objDB = mssql_select_db("work1");
    $strSQL = "INSERT INTO about ";
    $strSQL .= "(Image,Position,Name,Lastname,Department,Role,Status)";
    $strSQL .= "VALUES";
    $strSQL .= "('" . $newfilename . "','" . $position . "','" . $name  . "','" . $lastname . "','" . $department . "','" . $role . "','1')";
    $objQuery = mssql_query($strSQL);
    //upload file in 
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
} else {
    $position = iconv("utf-8", "tis-620", $_POST['position']);
    $name = iconv("utf-8", "tis-620", $_POST['name']);
    $lastname = iconv("utf-8", "tis-620", $_POST['lastname']);
    $department = iconv("utf-8", "tis-620", $_POST['department']);
    $role = iconv("utf-8", "tis-620", $_POST['role']);
    $objDB = mssql_select_db("work1");
    $strSQL = "INSERT INTO about ";
    $strSQL .= "(Position,Name,Lastname,Department,Role,Status)";
    $strSQL .= "VALUES";
    $strSQL .= "('" . $position . "','" . $name  . "','" . $lastname . "','" . $department . "','" . $role . "','1')";
    $objQuery = mssql_query($strSQL);
}


?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=1&Submenu=indexname";
</script>