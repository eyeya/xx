<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>ข้อมูลพระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</title>
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

<body>
    
    <br>
    <h1 align='center'>ข้อมูลพระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</h1>
    <br>
    <a href="labor/createlabor.php"><button type="button" class="btn btn-primary">เพิ่มข้อมูล</button></a>
    &nbsp; &nbsp;
    <br>  <br>
</body>

<?php
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM labor");
?>
<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr>
        <th>รหัส</th>
        <th>รูปภาพ</th>
        <th>รายละเอียด</th>
        <th>ชื่อไฟล์</th>
        <th>Edit</th>
        <th>Delete</th>
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
            <td><a href='labor/editlabor.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
            <td><a href='labor/deletelabor.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">ลบ</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>