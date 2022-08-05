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


$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO appointment";
$strSQL .= "(meetmonth,appointment,date,time,day,invite,send,location,note)";
$strSQL .= "VALUES";
$strSQL .= "('" . $meetmonth . "','" . $appointment . "','" . $date . "','" . $time . "',
'" . $day . "','" . $invite . "','" . $send . "','" . $location . "','" . $note . "')";
$strSQL .= mssql_query($strSQL);


?>

<script type="text/javascript">
    window.location = "indexappointment.php";
</script>