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
    <title>คำขอร้องเรียน</title>
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

    h1 {
        border: 8px solid #D4D2F2;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: SlateBlue;
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
    <h1 align='center'>คำขอร้องเรียน</h1>
    <br>
</body>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM comment where status='1' " );

?>
<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center">
        <th>รหัส</th>
        <th>เรื่องร้องเรียน</th>
        <th>รายละเอียดขอร้องเรียน</th>
    </tr>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $subject = iconv("tis-620", "utf-8", $info['Subject']);
        $story = iconv("tis-620", "utf-8", $info['Story']);
    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $story; ?></td>
        </tr>
    <?php } ?>
</table>

</html>