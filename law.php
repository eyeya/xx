<?
$data = mssql_query("SELECT *FROM law where status='1'");

echo "</tables>";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

  <title>ฉบับกฎหมายแรงงาน</title>
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
   

  }



  
  

  img{
    height: 250px;
  }

  .zoom:hover {
    transform: scale(1.5);
  }
  .box5 {
    width: 200px;
    height: 600px;
    /* min-height: 250px; */
    float: left;
    padding-right: 15px;
    /* border: solid 1px black; */
    padding: 10px 15px;
    margin-right: 60px;
    color: #000;
    /* background-color: white; */
    margin-bottom: 35px;

  }
 
  .btn{
text-align: center;
  }
 
</style>

<body>
  <h1>กฎหมายแรงงานรัฐวิสาหกิจที่เกี่ยวข้อง</h1><br>
  <? while ($info = mssql_fetch_array($data)) {
    $details = iconv("tis-620", "utf-8", $info['Details']);
    $filename = iconv( "tis-620", "utf-8", $info['Filename']);
    $image = iconv("tis-620", "utf-8", $info['Image']);

  ?>
    <div class="box5">
      <br>

      <div class="entry">
        <center>
          <img id="showimg" src="uploads/<?php echo $image ?> ">

        </center><br>

        <p class="p1"><? echo $details ?><br>
          
          <br><button type="button" class="btn"><a href="uploads/<?php echo $filename?>" download/Download File>Download </a></p>
          </a>
        </p>
      </div>
    </div>
  <?php } ?>
</body>

</html>