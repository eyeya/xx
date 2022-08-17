<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            font-size: 17px;
        }

        .container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .container img {
            vertical-align: middle;
        }

        .container .content {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            /* Fallback color */
            background: rgba(0, 0, 0, 0.5);
            /* Black background with 0.5 opacity */
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }
    </style>
</head>

<body>
    <a href="../index.php">ย้อนกลับ</a>
    <h2 align="center">ข่าวสาร</h2>
    <br>

    <div class="container">
        <img src="../images/news.png" alt="news" style="width:50%;">
        <div class="content">
            <h1>วันอังคารที่ 9 พฤศจิกายน 2564</h1>
            <p>ผู้เข้าร่วมประชุมคณะกรรมการกิจการสัมพันธ์ ครั้งที่ 2/2565 </p>
        </div>
    </div>

</body>

</html>