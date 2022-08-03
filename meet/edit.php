<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>แก้ไขข้อมูลไฟล์งานการประชุม</title>
</head>
<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM meet WHERE ID={$ID}")
    or die(mssql_error());


?>

<style>
    input[type=submit] {
        background-color: #fa4848f7;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }



    input[type=submit]:hover {
        background-color: #49c31d;
    }

    #ass {
        background-color: lightcoral;
        width: 300px;
        padding: 25px;
        border: 25px solid navajowhite;
        margin: 25px;
        text-align: left;
    }
</style>

<body>
    <a href="index.php">ย้อนกลับ</a>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("utf-8", "tis-620", $info['Image']);
        $details = iconv("tis-620", "utf-8", $info['Details']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
        $filename = iconv("tis-620", "utf-8", $info['Filename']);
    ?>
        <form action="update.php?ID=<?php echo $info['ID']; ?>" method="POST" enctype="multipart/form-data">
            <div align="center">
                <h2>แก้ไขข้อมูลไฟล์งานการประชุม</h2>

                <div id="ass">
                    <p>
                        <label for="text">รหัส</label>
                    </p>

                    <p>
                        <input type="text" name="ID" value="<?php echo $ID; ?>" />
                    </p>

                    <p>
                        <label for="text">รูปภาพ</label>
                    </p>

                    <p>
                        <input type="file" name="image" value="<?php echo $image; ?>" /><br />
                    </p>
                    <p>
                        <label for="text">รายละเอียด</label>
                    </p>

                    <p>
                        <input type="text" name="details" value="<?php echo $details; ?>" />
                    </p>
                    <p>
                        <label for="text">วันที่ประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="day" value="<?php echo $day; ?>" />
                    </p>

                    <p>
                        <label for="text">ไฟล์งานการนัดประชุม</label>
                    </p>

                    <p>
                    <p>
                        <input type="file" name="filename" value="<?php echo $filename; ?>" /><br />
                    </p>

                    <p>
                        <input type="submit" name="submit" value="Upload" />
                    </p>
                </div>
            </div>
        </form>
    <?php } ?>
</body>

</html>