<?
$sql        = "SELECT *FROM imperative WHERE ID ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);

$sql2        = "SELECT *FROM news WHERE ID ='2'";
$result2     = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);
$numrows2    = $db_tm->sql_numrows($result2);

$sql3       = "SELECT *FROM news WHERE ID ='3'";
$result3     = $db_tm->sql_query($sql3);
$rows3       = $db_tm->sql_fetchrow($result3);
$numrows3    = $db_tm->sql_numrows($result3);

$sql4        = "SELECT *FROM news WHERE ID ='4'";
$result4     = $db_tm->sql_query($sql4);
$rows4       = $db_tm->sql_fetchrow($result4);
$numrows4    = $db_tm->sql_numrows($result4);

$sql5        = "SELECT *FROM news WHERE ID ='5'";
$result5     = $db_tm->sql_query($sql5);
$rows5       = $db_tm->sql_fetchrow($result5);
$numrows5    = $db_tm->sql_numrows($result5);

$sql6        = "SELECT *FROM news WHERE ID ='6'";
$result6     = $db_tm->sql_query($sql6);
$rows6       = $db_tm->sql_fetchrow($result6);
$numrows6    = $db_tm->sql_numrows($result6);

$sql7        = "SELECT *FROM news WHERE ID ='7'";
$result7     = $db_tm->sql_query($sql7);
$rows7       = $db_tm->sql_fetchrow($result7);
$numrows7    = $db_tm->sql_numrows($result7);

echo "</tables>";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ระเบียบและข้อบังคับของ วว</title>
  
</head>
<style>

    text {
        /* font-family: EkkamaiNew; */
        font-size: 18px;
        color:rgb(2, 30, 80);
    }

    h1 {
        border:8px solid #629cf2; 
        width:150px;
        border-radius:45px;
        text-align: center;
        color: rgb(255, 255, 255);
        font-size: 27px;
        background-color: rgb(6, 45, 123);
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 30%;
        margin: 0 auto;
        font-size: 22px;
        /* border-radius: 15px; */

    }
#myImg {
  border-radius: 7px;

}
* {
      box-sizing: border-box;
    }
    
    .column {
      float: left;
      padding: 10px;
      /* height: 300px; */
    }
    
    .left {
      width: 50%;
      font-size: 20px;
      text-align: center;
    }
    
    .right {
      width: 50%;
      font-size: 20px;
      text-align: center;
    
    }
    .zoom {
     width: 100px;
     height: auto;
 }
 .zoom:hover {
     transform: scale(1.5);
  }
</style>

<body>
    <h1>ระเบียบและข้อบังคับของ วว</h1>
      <br><br> 
      <div class="row">
        <div class="column left">
          
          <div align="center"><img class="zoom" src="images/t.png" id="myImg" style="width:20%;" ></div><br>
          <text><? echo iconv("tis-620", "utf-8", $rows['Details']);?><text><br>
            <a href="pdf3/ข้อบังคับหลักเกณฑ์และอัตราค่ารักษาพยาบาลกรณีผู้ป่วยฉุกเฉิน.pdf" download/Download File>Download</a>
          <br><br>
          <div align="center"><img class="zoom" src="images/x.png" id="myImg" style="width:20%;" ></div><br>
          <text>ข้อบังคับการช่วยเหลือพนักงานเกี่ยวกับการรักษาพยาบาล <br> (ฉบับที่ 7) พ.ศ. 2565<text><br>
          <a href="pdf3/ข้อบังคับการช่วยเหลือพนักงานเกี่ยวกับการรักษาพยาบาล (ฉบับที่ 7) พ.ศ. 2565.pdf" download/Download File>Download</a>
          <br><br>
          <div align="center"><img class="zoom" src="images/u.png" id="myImg" style="width:20%;" ></div><br>
          <text>ระเบียบวิธีการเบิกจ่ายเงินช่วยเหลือพนักงานเกี่ยวกับ <br> การรักษาพยาบาล (ฉบับที่ 11) พ.ศ. 2565<text><br>
          <a href="pdf3/ระเบียบวิธีการเบิกจ่ายเงินช่วยเหลือพนักงานเกี่ยวกับการรักษาพยาบาล (ฉบับที่ 11) พ.ศ. 2565.pdf" download/Download File>Download</a>
        </div>
        
        <div class="column right" >
            <div align="center"><img class="zoom" src="images/q.png" id="myImg" style="width:20%;" ></div><br>
            <text>ข้อบังคับสวัสดิการเกี่ยวกับค่ารักษาพยาบาล <br> ของลูกจ้าง (ฉบับที่ 7) พ.ศ. 2565<text><br>
            <a href="pdf3/ข้อบังคับสวัสดิการเกี่ยวกับค่ารักษาพยาบาลของลูกจ้าง (ฉบับที่ 7) พ.ศ. 2565.pdf" download/Download File>Download</a>
            <br><br>
            <div align="center"><img class="zoom" src="images/i.png" id="myImg" style="width:20%;" ></div><br>
            <text>ระเบียบการเบิกจ่ายเงินสวัสดิการเกี่ยวกับ<br>ค่ารักษาพยาบาลของลูกจ้าง (ฉบับที่ 7) พ.ศ. 2565<text><br>
            <a href="pdf3/ระเบียบการเบิกจ่ายเงินสวัสดิการเกี่ยวกับค่ารักษาพยาบาลของลูกจ้าง (ฉบับที่ 7) พ.ศ. 2565.pdf" download/Download File>Download</a>
            <br><br>
            <div align="center"><img class="zoom" src="images/y.png" id="myImg" style="width:20%;" ></div><br>
            <text>ข้อบังคับเงินช่วยเหลือในการจัดการศพผู้ปฏิบัติงาน <br> (ฉบับที่ 2) พ.ศ. 2565<text><br>
            <a href="pdf3/ข้อบังคับเงินช่วยเหลือในการจัดการศพผู้ปฏิบัติงาน (ฉบับที่ 2) พ.ศ. 2565.pdf" download/Download File>Download</a>
          </div>
      </div>
</body>
</html>