<?php
$data = mssql_query("SELECT *FROM imperative where status='1'");

echo "</tables>";
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ระเบียบและข้อบังคับของ วว</title>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
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
    width: 200px;
    height: 300px;
  }

  .zoom:hover {
    transform: scale(1.5);
  }

  .box5 {
    width: 306px;
    min-height: 250px;
    float: left;
    padding-right: 15px;
    /* border: solid 1px black; */
    padding: 10px 15px;
    margin-right: 80px;
    margin-left: 80px;
    color: #000;
    margin-bottom: 25px;
    background-color: #EBECE7;
    text-align: center;
  }
</style>

<body>
  <h1>ระเบียบและข้อบังคับของ วว.</h1>
  <br><br>
  <? while ($info = mssql_fetch_array($data)) {
    $details = iconv("tis-620", "utf-8", $info['Details']);
    $image = iconv("tis-620", "utf-8", $info['Image']);
    $filename = iconv("tis-620", "utf-8", $info['Filename']);
  ?>
    <div class="box5">
      <br>

      <div class="entry">
        <center>
          <img id="showimg" img class="zoom" src="uploads/<?php echo $image ?> ">

        </center><br>


        <p><? echo $details ?></p>
        <br><button type="button" class="btn "><a href="uploads/<?php echo $filename ?>" download/Download File>Download </a>
          </a>
          </p>
      </div>
    </div>
  <?php } ?>
</body>

</html>