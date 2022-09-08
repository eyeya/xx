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
    <title>คำถาม คำตอบ</title>
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
        border: 8px solid Salmon;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: OrangeRed;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 30%;
        margin: 0 auto;
        font-size: 22px;
    }
</style>
<boby>
<br>
    <h1>คำถาม คำตอบ</h1><br>
</boby>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM qa ");

?>
<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center">
        <th>รหัส</th>
        <th>คำถาม</th>
        <th>วันที่ถาม</th>
        <th>คำตอบ</th>
        <th>ตอบกลับ</th>
        <th>ลบ</th>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $question = iconv("tis-620", "utf-8", $info['Question']);
        $answer = iconv("tis-620", "utf-8", $info['Answer']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $question; ?></td>
            <td><?php echo $day; ?></td>
            <td><?php echo $answer; ?></td>
            <td style="text-align:center ;">
                 <?
                if ($info["Status"]=="") {
                    ?>
                  <a href='admin.php?Menu=5&Submenu=createqa&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-success">คำตอบ</button></a>
                 <?
                 }
                 ?>
                </td>
                <td><a href='qa/deleteqa.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
            
        </tr>
    <?php } ?>
</table>

</html>
</script>