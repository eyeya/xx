<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>คำถาม คำตอบ</title>
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
    
    <h1>คำถาม คำตอบ</h1><br>
</boby>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM qa");

?>
<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center" bgcolor="DarkSalmon">
        <th>รหัส</th>
        <th>คำถาม</th>
        <th>คำตอบ</th>
        <th>ตอบกลับ</th>
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
            <td><a href='qa/createqa.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-success">ตอบกลับ</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>