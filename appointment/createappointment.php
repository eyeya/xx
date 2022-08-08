<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ตารางนัดหมายการประชุม</title>
</head>
<style>
    #add {
        background-color: Plum;
        width: 300px;
        padding: 25px;
        border: 20px solid DarkOrchid ;
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
    <form action="storeappointment.php" method="POST" enctype="multipart/form-data">
        <div align="center">
            <h2>เพิ่มข้อมูลตารางนัดหมายการประชุม</h2>
            <div id="add">
                    
                    <p>
                        <label for="input-fullname">ประชุมประจำเดือน</label>
                    </p>

                    <p>
                        <input type="text" name="meetmonth"  />
                    </p>


                    <p>
                        <label for="text">ครั้งที่</label>
                    </p>

                    <p>
                        <input type="text" name="appointment"  />
                    </p>

                    <p>
                        <label for="text">วันที่ประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="date" />
                    </p>
                    <p>
                        <label for="text">เวลาประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="time"  />
                    </p>
                    <p>
                        <label for="text">เสนอวาระ</label>
                    </p>

                    <p>
                        <input type="text" name="day"  />
                    </p>
                    <p>
                        <label for="text">ออกหนังสือเชิญ</label>
                    </p>

                    <p>
                        <input type="text" name="invite"  />
                    </p>
                    <p>
                        <label for="text">ส่งเอกสารประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="send"  />
                    </p>
                    <p>
                        <label for="text">สถานที่ประชุม</label>
                    </p>

                    <p>
                        <input type="text" name="location"  />
                    </p>

                    <p>
                        <label for="text">หมายเหตุ</label>
                    </p>

                    <p>
                        <input type="text" name="note"  />
                    </p>

                    <p>
                        <input type="submit" name="submit" value="Submit" />
                    </p>


            </div>
        </div>
    </form>
</body>

</html>