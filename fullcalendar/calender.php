<?php
// include("../includes/config.inc.php");
header('Content-Type: text/html; charset=utf-8');
$weekDay = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสฯ', 'ศุกร์', 'เสาร์');
$thaiMon = array(
   "01" => "มกราคม", "02" => "กุมภาพันธ์", "03" => "มีนาคม", "04" => "เมษายน",
   "05" => "พฤษภาคม", "06" => "มิถุนายน", "07" => "กรกฎาคม", "08" => "สิงหาคม",
   "09" => "กันยายน", "10" => "ตุลาคม", "11" => "พฤศจิกายน", "12" => "ธันวาคม"
); //array วัน กับเดือน

//Sun - Sat
$month = isset($_GET['month']) ? $_GET['month'] : date('m'); //ถ้าส่งค่าเดือนมาใช้ค่าที่ส่งมา ถ้าไม่ส่งมาด้วย ใช้เดือนปัจจุบัน
$year = isset($_GET['year']) ? $_GET['year'] : date('Y'); //ถ้าส่งค่าปีมาใช้ค่าที่ส่งมา ถ้าไม่ส่งมาด้วย ใช้ปีปัจจุบัน

//วันที่
$startDay = $year . '-' . $month . "-01";   //วันที่เริ่มต้นของเดือน

$timeDate = strtotime($startDay);   //เปลี่ยนวันที่เป็น timestamp(ประเภทข้อมูล ชั่วคราวที่รวมวันที่และเวลาไว้ด้วยกัน )
$lastDay = date("t", $timeDate);   //จำนวนวันของเดือน

$endDay = $year . '-' . $month . "-" . $lastDay;  //วันที่สุดท้ายของเดือน

$startPoint = date('w', $timeDate);   //จุดเริ่มต้น วันในสัปดาห์

//echo "<br>\$data ";
//print_r($data);
//echo "<hr>";
?>
<html>

<head>
   <title></title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
   <script type='text/javascript'>
      function goTo(month, year) {
         window.location.href = "index.php?Menu=2&Submenu=calender&year=" + year + "&month=" + month; //ใส่แล้วทำให้กดแล้วหน้าเดิมยังเด้งแต่เดือนเปลี่ยน
      }
   </script>
   <style>
      .aa{
         margin-left: 450px;
         
      }

      th,
      td {
         width: 1000px;
         height: 50px;
         text-align: center
      }

      th {
         background-color: #BFCED6;
         width: 1000px;
      }

      #tb_calendar,
      #main {
         width: 900px;
         background-color: #eeeeee ;
      }


      #nav {
         background-color: #293242;
         min-height: 20px;
         padding: 20px;
         font-size: 30px;
         text-align: center;
         color: white;
         width: 900px;
      }

      .navLeft {
         float: left;
         margin-left: 12px;
         font-size: 14px;
         font-weight: 700;
         text-transform: uppercase;
         background-color: transparent;
         display: inline-block;
         /* padding: 8px 20px; */
         color: white;
         border: 2px solid white;
         transition: all 0.5s;
      }

      .navRight {
         float: right;
         margin-left: 12px;

         font-size: 14px;
         font-weight: 700;
         text-transform: uppercase;
         background-color: transparent;
         display: inline-block;
         /* padding: 8px 20px; */
         color: white;
         border: 2px solid white;
         transition: all 0.5s;
      }

      /* .title {
         float: none;
         text-align: center;
         width: 300px;
      } */
   </style>
</head>

<body class="aa">

   <?php
   // echo "<br/>ตำแหน่งของวันที่ $startDay คือ <strong>", $startPoint, " (ตรงกับ วัน", $weekDay[$startPoint] . ")</strong>";

   $title = "เดือน $thaiMon[$month] <strong>" . $startDay . " : " . $endDay . "</strong>";

   //ลดเวลาลง 1 เดือน
   $prevMonTime = strtotime('-1 month', $timeDate);
   $prevMon = date('m', $prevMonTime);
   $prevYear = date('Y', $prevMonTime);
   //เพิ่มเวลาขึ้น 1 เดือน
   $nextMonTime = strtotime('+1 month', $timeDate);
   $nextMon = date('m', $nextMonTime);
   $nextYear = date('Y', $nextMonTime);

   echo '<div id="main">';
   echo '<div id="nav"> 
  <button  class="navLeft" onclick=" goTo(\'' . $prevMon . '\', \'' . $prevYear . '\') ;"> เดือนที่แล้ว</button>
  <button class="navRight" onclick="goTo(\'' . $nextMon . '\', \'' . $nextYear . '\');">เดือนต่อไป</button>
  <div class="title">' . $title . '</div>
  </div>
  </div>
 
 <div style="clear:both"></div>';
   echo "<table id='tb_calendar' border='1'>"; //เปิดตาราง
   echo "<tr>
  <th>อาทิตย์</th><th>จันทร์</th><th>อังคาร</th><th>พุธ</th><th>พฤหัสฯ</th><th>ศุกร์</th><th>เสาร์</th>
</tr>";
   echo "<tr>";    //เปิดแถวใหม่
   $col = $startPoint;          //ให้นับลำดับคอลัมน์จาก ตำแหน่งของ วันในสับดาห์ 
   if ($startPoint < 7) {         //ถ้าวันอาทิตย์จะเป็น 7
      echo str_repeat("<td> </td>", $startPoint); //สร้างคอลัมน์เปล่า กรณี วันแรกของเดือนไม่ใช่วันอาทิตย์
   }
   for ($i = 1; $i <= $lastDay; $i++) { //วนลูป ตั้งแต่วันที่ 1 ถึงวันสุดท้ายของเดือน
      $col++;       //นับจำนวนคอลัมน์ เพื่อนำไปเช็กว่าครบ 7 คอลัมน์รึยัง
      $fullday = $i . '/' . $month . '/' . $year;

      //ใส่ sql ตรงนี้ 
      $objDB = mssql_select_db("work1");
      $sql = "SELECT * FROM appointment where DD='$i'and MM='$month' and YY='$year'";
      $data = mssql_query($sql);
      $rows = mssql_fetch_array($data);

      $event = $rows['DD'];
      if ($event != "") {
         $hox = '<a href="index.php?Menu=2&Submenu=news1.'.$rows["ID_news"].'">มีประชุม</a>';//ใน href ต้องการเชื่อมไปหน้าข่าว
      } else {
         $hox = "";
      }

      echo "<td>", $i . '<br>' . $hox, "</td>";  //สร้างคอลัมน์ แสดงวันที่ 
      if ($col % 7 == false) {   //ถ้าครบ 7 คอลัมน์ให้ขึ้นบรรทัดใหม่
         echo "</tr><tr>";   //ปิดแถวเดิม และขึ้นแถวใหม่
         $col = 0;     //เริ่มตัวนับคอลัมน์ใหม่
      }
   }
   if ($col < 7) {         // ถ้ายังไม่ครบ7 วัน
      echo str_repeat("<td> </td>", 7 - $col); //สร้างคอลัมน์ให้ครบตามจำนวนที่ขาด
   }
   echo '</tr>';  //ปิดแถวสุดท้าย
   echo '</table>'; //ปิดตาราง
   echo '</main>'; 

   ?>
</body>

</html>