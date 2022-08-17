
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</title>
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
        margin-left: 75%;
    }

    footer {
        width: 70%;
        background-color: #CC3333;
        color: white;
        text-align: center;
        font-size: 20px;
        margin-left: 15%;

    }

    h1 {
        border: 8px solid #FF9933;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: #FF6600;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 48%;
        margin: 0 auto;
        font-size: 22px;
    }
</style>

<body>
    <br>
    <h1>แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</h1><br>
    <a href="admin.php?Menu=2&Submenu=createappointment"><button type="button" class="btn btn-primary">เพิ่มข้อมูลแผนการประชุมคณะกรรมการกิจการสัมพันธ์</button></a><br>
    
</body>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM appointment where status='1' " );

?>
<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center" bgcolor="#F3D8D1">
        <th>รหัส</th>
        <th>ประชุมประจำเดือน</th>
        <th>ครั้งที่</th>
        <th>วันที่ประชุม</th>
        <th>เวลาประชุม</th>
        <th>วันเสนอวาระ</th>
        <th>วันออกหนังสือเชิญ</th>
        <th>วันส่งเอกสารประชุม</th>
        <th>สถานที่ประชุม</th>
        <th>หมายเหตุ</th>
        <th>Edit</th>
        <th>Delete</td>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $meetmonth = iconv("tis-620", "utf-8", $info['Meetmonth']);
        $appointment = iconv("tis-620", "utf-8", $info['Appointment']);
        $date = iconv("tis-620", "utf-8", $info['Date']);
        $time = iconv("tis-620", "utf-8", $info['Time']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
        $invite = iconv("tis-620", "utf-8", $info['Invite']);
        $send = iconv("tis-620", "utf-8", $info['Send']);
        $location = iconv("tis-620", "utf-8", $info['Location']);
        $note = iconv("tis-620", "utf-8", $info['Note']);

    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $meetmonth; ?></td>
            <td><?php echo $appointment; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $time; ?></td>
            <td><?php echo $day; ?></td>
            <td><?php echo $invite; ?></td>
            <td><?php echo $send; ?></td>
            <td><?php echo $location; ?></td>
            <td><?php echo $note; ?></td>
            <td><a href='admin.php?Menu=2&Submenu=editappointment&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">Edit</button></a></td>
            <td><a href='appointment/deleteappointment.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
        </tr>
    <?php } ?>
</table>
<br>
<footer>หมายเหตุ : แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565 อาจมีการเปลี่ยนแปลงตามมติที่ประชุม</footer>

</html>