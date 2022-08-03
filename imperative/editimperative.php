<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>แก้ไขข้อมูลระเบียบและข้อบังคับของ วว.</title>
</head>
<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM imperative WHERE ID={$ID}")
    or die(mssql_error());

?>
<style>
    #add {
        background-color: Plum;
        width: 300px;
        padding: 25px;
        border: 20px solid DarkOrchid;
        margin: 25px;
        text-align: left;
    }

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
</style>

<body>
    <a href="indeximperative.php">ย้อนกลับ</a>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("utf-8", "tis-620", $info['Image']);
        $details = iconv("tis-620", "utf-8", $info['Details']);
        $filename = iconv("tis-620", "utf-8", $info['Filename']);
    ?>
        <form action="updateimperative.php?ID=<?php echo $info['ID']; ?>" method="POST" enctype="multipart/form-data">
            <div align="center">
                <h2>แก้ไขข้อมูลระเบียบและข้อบังคับของ วว.</h2>
                <div id="add">
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
                        <input type="file" name="image" accept="" /><br />
                    </p>
                    <p>
                        <label for="input-fullname">รายละเอียด</label>
                    </p>

                    <p>
                        <input type="text" name="details" value="<?php echo $details; ?>" />
                    </p>


                    <p>
                        <label for="text">ไฟล์ระเบียบและข้อบังคับของ วว.</label>
                    </p>


                    <p>
                        <input type="file" name="filename" accept="" /><br />
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