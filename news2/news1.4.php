<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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

        .btn {
            margin-left: 30px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
<a href="../index.php"   type="button" class="btn btn-secondary btn-lg">ย้อนกลับ</a>
    <h2 align="center">ข่าวสาร</h2>
    <br>

    <div class="container">
        <img src="../images/news.png" alt="news" style="width:100%;">
        <div class="content">
            <h1>ครั้งที่ 4/2565</h1>
            <p>ผู้เข้าร่วมประชุมคณะกรรมการกิจการสัมพันธ์ ครั้งที่ 4/2565</p>
        </div>
    </div>

</body>

</html>