<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ข้อมูลพระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 80%;
    }

    td {
        border: 4px solid #FF6633;
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
        margin-left: 5%;
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
        margin-left: 5%;
    }

    h1 {
        border: 8px solid SandyBrown;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: Chocolate;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 35%;
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
        margin-left: 72%;
    }
</style>

<body>
    <a href="../admin.php">ย้อนกลับ</a>
    <br>
    <h1 align='center'>ข้อมูลพระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</h1>
    <br>
    <a href="createlabor.php"><button class="button2">เพิ่มข้อมูลพระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</button></a>
    &nbsp; &nbsp;
    <br>  <br>
</body>

<?php
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM labor");
?>
<table width=65% border=1 cellpadding=3 align="center">
    <tr align="center" bgcolor="#FFCC66">
        <td>รหัส</td>
        <td>รูปภาพ</td>
        <td>รายละเอียด</td>
        <td>ชื่อไฟล์</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['Image']);
        $details = iconv("tis-620", "utf-8", $info['Details']);
        $filename = iconv("tis-620", "utf-8", $info['Filename']);
    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $image; ?></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $filename; ?></td>
            <td><a href='editlabor.php?ID=<?php echo $info['ID']; ?>'><button class="button">Edit</button></a></td>
            <td><a href='deletelabor.php?ID=<?php echo $info['ID']; ?>'><button class="button1">delete</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>