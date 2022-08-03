<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>เพิ่มข้อมูลกฏหมายแรงงานรัฐวิสาหกิจ</title>
</head>

<style>
     #add {
        background-color: lightgrey;
        width: 300px;
        padding: 25px;
        border: 20px solid saddlebrown;
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
<a href="indexlaw.php">ย้อนกลับ</a>
    <form action="storelaw.php" method="POST" enctype="multipart/form-data">
    <div align="center">    
    <h2>เพิ่มข้อมูลกฏหมายแรงงานรัฐวิสาหกิจ</h2>
        <div id="add">
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
                <input type="text" name="details" />
            </p>
            

            <p>
                <label for="text">ไฟล์</label>
            </p>

            
            <p>
                <input type="file" name="filename" accept="" /><br />
            </p>

            <p>
                <input type="submit" name="submit" value="submit" />
            </p>
        </div>
    </div>
    </form>
</body>

</html>