<?php

$subject = iconv("utf-8", "tis-620", $_POST['subject']);
$story = iconv("utf-8", "tis-620", $_POST['story']);
$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO comment ";
$strSQL .= "(subject,story)";
$strSQL .= "VALUES";
$strSQL .= "('" . $subject . "','" . $story . "')";
$objQuery = mssql_query($strSQL);

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'K2D', sans-serif;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid rgb(64, 170, 216);
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
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

      background: linear-gradient(to top, #f0ffff 15%, #ffffff 100%);
    }

    .centered {
      text-align: center;
      width: 30%;
      height: 4%;
      border: double 5px rgb(241, 160, 160);
      border-radius: 5px;
    }

    .bodydy {
      justify-content: center;
      display: flex;
      background-color: rgb(236, 236, 236);
    }
  </style>

</head>

<body class="bodydy">
  <form action="#" method="post">

    <div class="container">
      <h3 class="centered">ยื่นข้อร้องเรียน</h3><br>
      <label for="text">เรื่อง</label>
      <input type="text" name="subject" placeholder="เรื่อง..">
      <label for="text">ข้อร้องเรียน</label>
      <textarea type="text" name="story" placeholder="เขียนอะไรบางอย่าง.." style="height:200px"></textarea>

      <input type="submit" value="ส่ง">
    </div>
</body>