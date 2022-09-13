<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>แก้ไขแผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</title>
</head>
<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM appointment WHERE ID={$ID}")
    or die(mssql_error());

?>
<style>
    body {
        font-family: 'Prompt', sans-serif;
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

    input[type=reset] {
        background-color: #787A79;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=reset]:hover {
        background-color: #656C5C;
    }
</style>

<body>
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
        $dd = iconv("tis-620", "utf-8", $info['DD']);
        $mm = iconv("tis-620", "utf-8", $info['MM']);
        $yy = iconv("tis-620", "utf-8", $info['YY']);
        $IDnews = iconv("tis-620", "utf-8", $info['ID_news']);
    ?>
        <form action="appointment/updateappointment.php?ID=<?php echo $info['ID']; ?>" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">
            <div align="center">
                <h2>แก้ไขแผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</h2>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-edit' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="id" value="<?php echo $ID; ?>" />
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="meetmonth" type="text" placeholder="ประชุมประจำเดือน" value="<?php echo $meetmonth; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='far fa-calendar-check' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="appointment" type="text" placeholder="ครั้งที่" value="<?php echo $appointment; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="date" type="text" placeholder="วันที่ประชุม" value="<?php echo $date; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='far fa-clock' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="time" type="text" placeholder="เวลาประชุม" value="<?php echo $time; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="day" type="text" placeholder="วันที่เสนอวาระ" value="<?php echo $day; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="invite" type="text" placeholder="วันที่ออกหนังสือเชิญ" value="<?php echo $invite; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="send" type="text" placeholder="วันที่ส่งเอกสารประชุม" value="<?php echo $send; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-map-marker-alt' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="location" type="text" placeholder="สถานที่ประชุม" value="<?php echo $location; ?>">
                    </div>
                </div>

                <!-- เพิ่มเอง หลังจากต้องการใส่วันที่  -->

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="dd" type="text" placeholder="วันที่" value="<?php echo $dd; ?>">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="mm" type="text" placeholder="เดือน" value="<?php echo $mm; ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="yy" type="text" placeholder="ปี" value="<?php echo $yy; ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="note" type="text" placeholder="หมายเหตุ" value="<?php echo $note; ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">

                    <div class="w3-rest">

                        <td>

                            <div class="container" style="margin-left: 100px; margin-right:75px">


                                    <select name="ID_news" id="id_ID" onchange="fm_ID_ID(this.value)"> 
                                        <option value="all">--กรุณาเลือก--</option>
                                        <? 
                                            $data2 = mssql_query("SELECT * FROM news");

                                            while ($info2 = mssql_fetch_array($data2)) {
                                                $aa = "";
                                                if ($IDnews== $info2["ID"]) {
                                                    $aa = "selected";
                                                }

                                                echo '<option value="' . $info2["ID"] . '"  ' . $aa . '>' . iconv("tis-620", "utf-8", $info2["Header"]) . '</option>';
                                            } ?>
                                    </select>   
                                
                        </td>
                    </div>
                </div>
                <p class="w3-center">
                    <input type="submit" name="submit" value="Upload">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="cancle" value="Cancel" />
                </p>
        </form>
    <?php } ?>
</body>

</html>