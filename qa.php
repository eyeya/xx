<?php
$data = mssql_query("SELECT TOP 5 * from qa where status ='1' ORDER BY ID DESC ");




?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  <style>
     body{
        font-family: 'Prompt', sans-serif;

    }
  
     
    input[type=submit] {
      background-color: #fa4848f7;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #49c31d;
    }

    .container {
      border-radius: 5px;
      background-color: #dde0f2;
      padding: 20px;

      background: linear-gradient(to top, #F3D6CE 15%, #ffffff 100%);
    }

    .tb {
      border-collapse: collapse;
      width: 100%;
      justify-content: center;
      border-spacing: 30px;
    }

    .td1 {
      background-color: #FEE5E0;
      border: 1px solid rgb(0, 0, 0);
      padding-left: 30px;
      font-size: 16px;
      
    }

    .td2 {
      background-color: #ffffff;
      border: 1px solid rgb(0, 0, 0);
    }

    .ddiv {
      font-size: 16px;

    }

    .a1 {
      font-size: 16px;

    }

    .td3 {
      background-color: #ffffff;
      border: 1px solid rgb(0, 0, 0);
      padding-left: 30px;
    }

    h1 {
      border: 8px solid #EED6D3;
      width: 150px;
      border-radius: 45px;
      text-align: center;
      color: rgb(255, 255, 255);
      font-size: 27px;
      background-color: #AA7C7A;
      margin-left: 10px;
      margin-top: 40px;
      padding: 7px;
      width: 30%;
      margin: 0 auto;
      font-size: 30px;
      font-family: 'Prompt', sans-serif;
    
      /* border-radius: 15px; */

      
    }
    h3{
      font-family: 'Prompt', sans-serif;
    }
    
  </style>

</head>

<body>
  <h1>ถาม-ตอบ Q&A</h1>
  <form action="./qa/storeqa.php" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">


    <h3>คำถาม</h3>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:40px'></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="question" type="text" placeholder="พิมพ์คำถาม...">
      </div>
    </div>
    <p class="w3-center">
      <input type="submit" name="submit" value="ส่ง" />
    </p>
  </form>

  <div>
    <? while ($info = mssql_fetch_array($data)) {
      $question = iconv("tis-620", "utf-8", $info['Question']);
      $answer = iconv("tis-620", "utf-8", $info['Answer']);
      $day = iconv("tis-620", "utf-8", $info['Day']);
      $dayout = iconv("tis-620", "utf-8", $info['Dayout']);
    ?>

      <table class="tb">
        <tr>
          <td class="td1">คำถาม : <a class="a1"><?php echo  $question; ?></a>
            <hr width="95%">
            <div class="ddiv">
              <p>ถามเมื่อ : <a class="a1"><?php echo  $day; ?></p>

            </div>
          </td>
        </tr>

        <tr>
          <td class="td3">คำตอบ : <a class="a1"><?php echo  $answer; ?></a>
            <hr width="95%">
            <div class="ddiv">
              <p>ตอบเมื่อ : <a class="a1"><?php echo  $dayout; ?></p>

            </div>
          </td>
        </tr>
      </table>
    <?php } ?>
  </div>
</body>