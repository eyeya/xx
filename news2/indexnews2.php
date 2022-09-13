<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>ข้อมูลข่าวสาร</title>
</head>
<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
   table {
        border-collapse: collapse;
        width: 70%;
        text-align: center;

    }

    th {
        background-color: IndianRed;
        color: white;
    }

    .btn-primary {
        margin-left: 90%;
    }

    h1 {
        border: 8px solid HotPink;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: MediumVioletRed;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 35%;
        margin: 0 auto;
        font-size: 22px;
    }
</style>

<body>
    <br>
    <h1 align='center'>ข้อมูลข่าวสาร</h1>
    <a href="admin.php?Menu=1&Submenu=createnews2"><button type="button" class="btn btn-primary">เพิ่มข้อมูลข่าวสาร</button></a> <br><br>
</body>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM news where status='1' " );

?>

<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center">
        <th>รหัส</th>
        <th>รูปภาพ</th>
        <th>ชื่อหัวเรื่อง</th>
        <th>เนื้อข่าว</th>
        <th>วันที่</th>
        <th>รายละเอียด</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['Image']);
        $header = iconv("tis-620", "utf-8", $info['Header']);
        $news = iconv("tis-620", "utf-8", $info['News']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
        
    ?>
        <tr>
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $image; ?></td>
            <td><?php echo $header; ?></td>
            <td><?php echo $news; ?></td>
            <td><?php echo $day; ?></td>
           
            <td><a href='admin.php?Menu=1&Submenu=editnews2&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">Edit</button></a></td>
            <td><a href='news2/deletenews2.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>