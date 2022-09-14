
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
    <title>ข้อมูลรายชื่อคณะกรรมการสัมพันธ์</title>

</head>
<style>
    body {
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
        margin-left: 82%;
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
    <h1 align='center'>ข้อมูลรายชื่อคณะกรรมการสัมพันธ์</h1>
    <a href="admin.php?Menu=1&Submenu=createname"><button type="button" class="btn btn-primary">เพิ่มข้อมูลรายชื่อคณะกรรมการสัมพันธ์</button></a> <br><br>

</body>

<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM about where status='1' " );

?>

<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center">
        <th>รหัส</th>
        <th>รูปภาพ</th>
        <th>ตำแหน่ง</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>แผนก</th>
        <th>บทบาทหน้าที่</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['Image']);
        $position = iconv("tis-620", "utf-8", $info['Position']);
        $name = iconv("tis-620", "utf-8", $info['Name']);
        $lastname = iconv("tis-620", "utf-8", $info['Lastname']);
        $department = iconv("tis-620", "utf-8", $info['Department']);
        $role = iconv("tis-620", "utf-8", $info['Role']);
    ?>
        <tr>
            <td><?php echo $info['ID']; ?></td>
            <td><img id="showimg" src="uploads/<?php echo $image; ?>" style="height:120px; width:100px;"></td>
            <td><?php echo $position; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $lastname; ?></td>
            <td><?php echo $department; ?></td>
            <td><?php echo $role; ?></td>
            <td><a href='admin.php?Menu=1&Submenu=editname&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">Edit</button></a></td>
            <td><a href='about/deletename.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
        </tr>
    <?php } ?>
</table>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
</html>