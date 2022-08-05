<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>แก้ไขข้อมูลตารางการประชุม</title>
</head>
<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM appointment WHERE ID={$ID}")
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
    <a href="indexappointment.php">ย้อนกลับ</a>
    <?php
    while ($info = mssql_fetch_array($data)) {
        
        $meetmonth = iconv("tis-620", "utf-8", $info['Meetmonth']);
        $appointment = iconv("tis-620", "utf-8", $info['Appointment']);
        $date = iconv("tis-620", "utf-8", $info['Date']);
        $time = iconv("tis-620", "utf-8", $info['Time']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
        $invite = iconv("tis-620", "utf-8", $info['Invite']);
        $send = iconv("tis-620", "utf-8", $info['Send']);
        $location = iconv("tis-620", "utf-8", $info['Location']);
        $note = iconv("tis-620", "utf-8", $info['Note']);
    ?>
        <form action="updateappointment.php?ID=<?php echo $info['ID']; ?>" method="POST" enctype="multipart/form-data">
            <div align="center">
                <h2>แก้ไขข้อมูลตารางการประชุม</h2>
                <div id="add">
                    <p>
                        <label for="text">รหัส</label>
                    </p>
                    <p>
                        <input type="text" name="ID" value="<?php echo $ID; ?>" />
                    </p>
                    
                    <p>
                        <label for="input-fullname">ประชุมประจำเดือน</label>
                    </p>

                    <p>
                        <input type="text" name="meetmonth" value="<?php echo $meetmonth; ?>" />
                    </p>


                    <p>
                        <label for="text">ครั้งที่</label>
                    </p>

                    <p>
                        <input type="text" name="appointment" value="<?php echo $appointment; ?>" />
                    </p>

                    <p>
                        <label for="text">วันที่ประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="date" value="<?php echo $date; ?>" />
                    </p>
                    <p>
                        <label for="text">เวลาประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="time" value="<?php echo $time; ?>" />
                    </p>
                    <p>
                        <label for="text">เสนอวาระ</label>
                    </p>

                    <p>
                        <input type="text" name="day" value="<?php echo $day; ?>" />
                    </p>
                    <p>
                        <label for="text">ออกหนังสือเชิญ</label>
                    </p>

                    <p>
                        <input type="text" name="invite" value="<?php echo $invite; ?>" />
                    </p>
                    <p>
                        <label for="text">ส่งเอกสารประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="send" value="<?php echo $send; ?>" />
                    </p>
                    <p>
                        <label for="text">สถานที่ประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="location" value="<?php echo $location; ?>" />
                    </p>

                    <p>
                        <label for="text">หมายเหตุ</label>
                    </p>

                    <p>
                        <input type="text" name="note" value="<?php echo $note; ?>" />
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