<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>แก้ไขข้อมูลรายชื่อคณะกรรมการสัมพันธ์</title>
</head>

<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไขข้อมูล

$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM news WHERE ID={$ID}")
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
        background-color: lightgrey;
        width: 250px;
        padding: 25px;
        border: 25px solid navy;
        margin: 25px;
        text-align: left;
    }
</style>

<body>
    <a href="indexnews2.php">ย้อนกลับ</a>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['Image']);
        $header = iconv("tis-620", "utf-8", $info['Header']);
        $news = iconv("tis-620", "utf-8", $info['News']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
    ?>

        <form action="updatenews2.php?ID=<?php echo $info['ID']; ?>" method="POST" enctype="multipart/form-data">
            <div align="center">
                <h2>แก้ไขข้อมูลคณะกรรมการกิจการสัมพันธ์</h2>
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
                        <label for="text">หัวเรื่อง</label>
                    </p>

                    <p>
                        <input type="text" name="header" value="<?php echo $header; ?>" />
                    </p>
                    <p>
                        <label for="text">เนื้อเรื่อง</label>
                    </p>

                    <p>
                        <input type="text" name="news" value="<?php echo $news; ?>" />
                    </p>

                    <p>
                        <label for="text">วันที่</label>
                    </p>

                    <p>
                        <input type="text" name="day" value="<?php echo $day; ?>" />
                    </p>

                   

                    <p>
                        <input type="submit" name="submit" value="Upload" />
                        <!-- &nbsp; &nbsp;
                    <input type="submit" name="submit" value="Cancel" /> -->
                    </p>

                </div>
        </form>
        </div>
    <?php } ?>
</body>

</html>