<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>ตารางการประชุม</title>
</head>
<style>


  table {
    border-collapse: collapse;
    width: 70%;
    text-align: center;

  }

  th {
    background-color: IndianRed;
    color: white;
  }
  .btn-primary{
    margin-left: 90%;
  }
  </style>

<boby>
   
    <br>
    <h1>ตารางการประชุม</h1><br>
    <a href="appointment/createappointment.php"><button type="button" class="btn btn-primary">เพิ่มข้อมูล</button></a> <br>
    <br>
</boby>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM appointment");

?>
<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr>
        <th>รหัส</th>
        <th>ประชุมประจำเดือน</th>
        <th>ครั้งที่</th>
        <th>วันที่ประชุม</th>
        <th>เวลาประชุม</th>
        <th>เสนอวาระ</th>
        <th>ออกหนังสือเชิญ</th>
        <th>ส่งเอกสารประชุม</th>
        <th>สถานที่ประชุม</th>
        <th>หมายเหตุ</th>
        <th>Edit</th>
        <th>Delete</th>
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
            <td><a href='appointment/editappointment.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
            <td><a href='appointment/deleteappointment.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">ลบ</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>