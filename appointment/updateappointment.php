<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");


$ID = $_GET['ID'];

$meetmonth = iconv("utf-8", "tis-620", $_POST['meetmonth']);
$appointment = iconv("utf-8", "tis-620", $_POST['appointment']);
$date = iconv("utf-8", "tis-620", $_POST['date']);
$time = iconv("utf-8", "tis-620", $_POST['time']);
$day = iconv("utf-8", "tis-620", $_POST['day']);
$invite = iconv("utf-8", "tis-620", $_POST['invite']);
$send = iconv("utf-8", "tis-620", $_POST['send']);
$location = iconv("utf-8", "tis-620", $_POST['location']);
$dd = iconv("utf-8", "tis-620", $_POST['dd']);
$mm = iconv("utf-8", "tis-620", $_POST['mm']);
$yy = iconv("utf-8", "tis-620", $_POST['yy']);
$note = iconv("utf-8", "tis-620", $_POST['note']);


$sql = ("UPDATE appointment SET Meetmonth='{$meetmonth}', Appointment='{$appointment}', Date='{$date}',
 Time='{$time}', Day='{$day}', Invite='{$invite}', Send='{$send}', Location='{$location}', Note='{$note}', DD='{$dd}', MM='{$mm}', YY='{$yy}'WHERE ID={$ID}");

// echo $sql."<br>";v
$objQuery = mssql_query($sql);


?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=2&Submenu=indexappointment";
</script>