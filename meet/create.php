<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>เพิ่มข้อมูลไฟล์งานการประชุม</title>
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

    div {
        background-color: lightcoral;
        width: 300px;
        padding: 25px;
        border: 25px solid navajowhite;
        margin: 25px;
    }
</style>

<body>
    <form action="store.php" method="POST" enctype="multipart/form-data">
        <h2>เพิ่มข้อมูลไฟล์งานการประชุม</h2>
        <div>
            <p>
                <label for="text">รูปภาพ</label>
            </p>
            <p>
                <input type="file" name="image" accept="" /><br />
            </p>
            <p>
                <label for="text">รายละเอียด</label>
            </p>

            <p>
                <input type="text" name="details" />
            </p>
            <p>
                <label for="text">วันที่ประชุม</label>
            </p>

            <p>
                <input type="text" name="day" />
            </p>

            <p>
                <label for="text">ไฟล์งานการนัดประชุม</label>
            </p>

            <p>
            <p>
                <input type="file" name="filename" accept="" /><br />
            </p>

            <p>
                <input type="submit" name="submit" value="submit" />
            </p>
        </div>
    </form>
</body>

</html>