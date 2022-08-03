<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>คำตอบ</title>
</head>
<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM qa WHERE ID='$ID'")
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
    <a href="indexqa.php">ย้อนกลับ</a>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $question = iconv("tis-620", "utf-8", $info['Question']);
        $answer = iconv("tis-620", "utf-8", $info['Answer']);
    ?>
        <form action="updateqa.php?ID=<?php echo $info['ID']; ?>" method="POST" enctype="multipart/form-data">
            <div align="center">
                <h2>คำตอบ</h2>
                <div id="add">
                    <p>
                        <label for="text">รหัส</label>
                    </p>
                    <p>
                        <input type="text" name="ID" value="<?php echo $ID; ?>" />
                    </p>
                   
                    <p>
                        <label for="text">คำถาม</label>
                    </p>

                    <p>
                        <input type="text" name="question" value="<?php echo $question; ?>" />
                    </p>


                    <p>
                        <label for="text">คำตอบ</label>
                    </p>


                    <p>
                        <input type="text" name="answer"  />
                    </p>

                    <p>
                        <input type="submit" name="submit" value="ตอบกลับ" />
                    </p>

                </div>
            </div>
        </form>
    <?php } ?>
</body>

</html>