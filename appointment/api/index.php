<?php

$objDB = @mssql_select_db("work1");
$data = @mssql_query("SELECT * FROM appointment where status='1' ");

//สร้าง Array เปล่า
$events = array();

while ($info = @mssql_fetch_array($data)) {
    $meetmonth = iconv("tis-620", "utf-8", $info['Meetmonth']);
    $appointment = iconv("tis-620", "utf-8", $info['Appointment']);
    $date = iconv("tis-620", "utf-8", $info['Date']);
    $time = iconv("tis-620", "utf-8", $info['Time']);
    $day = iconv("tis-620", "utf-8", $info['Day']);
    $invite = iconv("tis-620", "utf-8", $info['Invite']);
    $send = iconv("tis-620", "utf-8", $info['Send']);
    $location = iconv("tis-620", "utf-8", $info['Location']);
    $note = iconv("tis-620", "utf-8", $info['Note']);

    // เอาตัวแปร ข้างบนนี้ไปยัดใส่ใน array
    $item = array();
    $item["meetmonth"] = $meetmonth;
    $item["appointment"] = $appointment;
    $item["date"] = $date;
    $item["time"] = $time;
    $item["day"] = $day;
    $item["invite"] = $invite;
    $item["send"] = $send;
    $item["location"] = $location;
    $item["note"] = $note;

        
    // "meetmonth" => $meetmonth,
        // "appointment" => $appointment,
        // "date" => $date,
        // "time" => $time,
        // "day" => $day,
        // "invite" => $invite,
        // "send" => $send,
        // "location" => $location,
        // "note" => $note,
    
    // print_r($item);
    array_push($events,$item);
    
} 
// print_r($events);
 
 //แปลง Array ให้กลายเป็น String และ return ออกไป
//  return json_encode($data, JSON_UNESCAPED_UNICODE);
 echo json_encode($events);
?>