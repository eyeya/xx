<?php

$meetmonth = iconv("utf-8", "tis-620", $_POST['meetmonth']);
$appointment = iconv("utf-8", "tis-620", $_POST['appointment']);
$date = iconv("utf-8", "tis-620", $_POST['date']);
$time = iconv("utf-8", "tis-620", $_POST['time']);
$day = iconv("utf-8", "tis-620", $_POST['day']);
$invite = iconv("utf-8", "tis-620", $_POST['invite']);
$send = iconv("utf-8", "tis-620", $_POST['send']);
$location = iconv("utf-8", "tis-620", $_POST['location']);
$note = iconv("utf-8", "tis-620", $_POST['note']);
$dd = iconv("utf-8", "tis-620", $_POST['dd']);
$mm = iconv("utf-8", "tis-620", $_POST['mm']);
$yy = iconv("utf-8", "tis-620", $_POST['yy']);


$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO appointment";
$strSQL .= "(meetmonth,appointment,date,time,day,invite,send,location,note,dd,mm,yy,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $meetmonth . "','" . $appointment . "','" . $date . "','" . $time . "',
'" . $day . "','" . $invite . "','" . $send . "','" . $location . "','" . $note . "','" . $dd . "','" . $mm . "','" . $yy . "','1')";
$strSQL .= mssql_query($strSQL);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=2&Submenu=indexappointment";
</script>