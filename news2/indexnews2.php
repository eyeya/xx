<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>ข้อมูลข่าวสาร</title>
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
   
    <h1 align='center'>ข้อมูลข่าวสาร</h1>
    <a href="news/createnews2.php"><button type="button" class="btn btn-primary">เพิ่มข้อมูล</button></a> <br>
    &nbsp; &nbsp;
</body>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM news");

?>

<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr>
        <th>รหัส</th>
        <th>รูปภาพ</th>
        <th>ชื่อหัวเรื่อง</th>
        <th>เนื้อข่าว</th>
        <th>วันที่</th>
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
            <td><a href='news/editnews2.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
            <td><a href='news/deletenews2.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">ลบ</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>