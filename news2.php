<?
$data = mssql_query("SELECT *FROM news where status='1'");

echo "</tables>";
?>

<head>
  <meta charset="UTF-8" />
</head>
<style>
 

  .box5 {
    width: 270px;
    min-height: 250px;
    float: left;
    border: solid 1px black;
    padding: 10px 15px;
    margin-left: 10px;
    color: #000;
    background-color: white;
    margin-bottom: 35px;
    margin-right: 10px;
  }
</style>

<body>



  <? while ($info = mssql_fetch_array($data)) {
    $header = iconv("tis-620", "utf-8", $info['Header']);
    $day = iconv("tis-620", "utf-8", $info['Day']);
    $image = iconv("tis-620", "utf-8", $info['Image']);

  ?>
    <div class="box5">
      <br>

      <div class="entry">
        <center>
          <img id="showimg" src="uploads/<?php echo $image ?> " height="250px">

        </center><br>

        <p class="p1"><? echo $header ?><br>
          <i class="fa fa-calendar-o"></i> <? echo $day ?>
          <br><a button id="myBtn" href="index.php?Menu=2&Submenu=newsmain&ID=<?php echo $info['ID']; ?>"><span>อ่านต่อ </span>
          </a>
        </p>
      </div>
    </div>
    
  <?php } ?>




</body>