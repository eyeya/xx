<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>คำขอร้องเรียน</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 80%;
    }

    td {
        border: 4px solid DarkSlateBlue;
        padding: 8px;
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
    <a href="../admin.php">ย้อนกลับ</a>
    <br>
    <h1 align='center'>คำขอร้องเรียน</h1>
    <br>
</body>
<?php
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM comment");
?>
<table width=65% border=1 cellpadding=3 align="center">
    <tr align="center" bgcolor="LightSteelBlue">
        <td>รหัส</td>
        <td>เรื่องร้องเรียน</td>
        <td>รายละเอียดข้อร้องเรียน</td>
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