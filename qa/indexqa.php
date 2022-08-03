<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>คำถาม คำตอบ</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 60%;
    }

    td {
        border: 5px solid Firebrick;
        padding: 8px;
    }

    .button {
        padding: 10px 20px;
        font-size: 10px;
        text-align: center;
        outline: none;
        color: white;
        background-color: GoldenRod;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 2%;
    }

    .button1 {
        padding: 10px 20px;
        font-size: 10px;
        text-align: center;
        outline: none;
        color: white;
        background-color: FireBrick;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 2%;
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

    .button2 {
        padding: 10px 20px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color: RebeccaPurple;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 65%;
    }
</style>
<boby>
    <a href="../admin.php">ย้อนกลับ</a>
    <br>
    <h1>คำถาม คำตอบ</h1><br>
</boby>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM qa");

?>
<table width=65% border=1 cellpadding=3 align="center">
    <tr align="center" bgcolor="DarkSalmon">
        <td>รหัส</td>
        <td>คำถาม</td>
        <td>คำตอบ</td>
        <td>ตอบกลับ</td>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $question = iconv("tis-620", "utf-8", $info['Question']);
        $answer = iconv("tis-620", "utf-8", $info['Answer']);
    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $question; ?></td>
            <td><?php echo $answer; ?></td>
            <td><a href='createqa.php?ID=<?php echo $info['ID']; ?>'><button class="button">คำตอบ</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>