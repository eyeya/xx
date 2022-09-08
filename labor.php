<?php
$sql        = "SELECT *FROM labor WHERE ID ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
$image      = $rows['Image'];
$path       = '../xx/images/';


echo "</tables>";
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>พระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</title>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

</head>
<style>
  body {
    font-family: 'Prompt', sans-serif;

  }

  text {
    /* font-family: EkkamaiNew; */
    font-size: 18px;
    color: rgb(2, 30, 80);
  }

  h1 {
    border: 8px solid #629cf2;
    width: 150px;
    border-radius: 45px;
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

  .left {
    width: 100%;
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
  <h1>พระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</h1>
  <br>
  <div class="row">
    <div class="column left">

      <div align="center"><img class="zoom" src="<? echo $path . $image; ?>" id="myImg" style="width:20%;max-width:100px aling-center "></div><br>
      <text><? echo iconv("tis-620", "utf-8", $rows['Details']); ?><text><br>
          <button type="button" class="btn btn-outline-primary"><a href="pdf1/พระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์  พ.ศ. 2543.pdf" download/Download File><i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i></a></button>
    </div>
  </div>
</body>

</html>