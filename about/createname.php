<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8" />
    <title>เพิ่มข้อมูลคณะกรรมการกิจการสัมพันธ์</title>
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
        background-color: lightgrey;
        width: 250px;
        padding: 20px;
        border: 20px solid navy;
        text-align: left;
    }
</style>

<body>
    <a href="indexname.php">ย้อนกลับ</a>
    <form action="storename.php" method="POST" enctype="multipart/form-data">
        <div align="center">
            <h2>เพิ่มข้อมูลคณะกรรมการกิจการสัมพันธ์</h2>
            <div id="add">
                <p>
                    <label for="text">ตำแหน่ง</label>
                </p>
                <p>
                    <input type="text" name="position" />
                </p>
                <p>
                    <label for="text">ชื่อ</label>
                </p>
                <p>
                    <input type="text" name="name" />
                </p>
                <p>
                    <label for="text">นามสกุล</label>
                </p>
                <p>
                    <input type="text" name="lastname" />
                </p>
                <p>
                    <label for="text">แผนก</label>
                </p>
                <p>
                    <input type="text" name="department" />
                </p>
                <p>
                    <label for="text">บทบาทหน้าที่</label>
                </p>
                <p>
                    <input type="text" name="role" />
                </p>
                <p>
                    <label for="text">รูปภาพ</label>
                </p>
                <p><input type="file" name="image" accept="" /><br />
                </p>
                <p>
                    <input type="submit" name="submit" value="submit" />
                </p>
            </div>
    </form>
    </div>
</body>

</html>