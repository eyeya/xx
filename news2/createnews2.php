<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>เพิ่มข้อมูลข้อมูลข่าวสาร</title>
</head>
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

    #add {
        background-color: #E2E3DE;
        width: 250px;
        padding: 20px;
        border: 20px solid #577460;
        text-align: left;

    }
</style>
<boby>
    <a href="indexnews2.php">ย้อนกลับ</a>
    <form action="storenews2.php" method="POST" enctype="multipart/form-data">
        <div align="center">
            <h2>เพิ่มข้อมูลข่าวสาร</h2>
            <div id="add">
                <p>
                    <label for="text">รูปภาพ</label>
                </p>

                <p><input type="file" name="image" accept="" /><br />

                <p>
                    <label for="text">ชื่อข่าวสาร</label>
                </p>

                <p>
                    <input type="text" name="header" />
                </p>

                <p>
                    <label for="text">รายละเอียดของข่าว</label>
                </p>

                <p>
                    <input type="text" name="news" />
                </p>

                <p>
                    <label for="text">วัน เดือน ปี</label>
                </p>

                <p>
                    <input type="text" name="day" />
                </p>

                <p>
                    <input type="submit" name="submit" value="submit" />
                </p>
            </div>

    </form>

    </div>
    </body>

</html>