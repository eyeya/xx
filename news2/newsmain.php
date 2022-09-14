
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            
            font-size: 17px;
            font-family: 'Prompt', sans-serif;
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
        .btn{
            margin-left: 30px;
            margin-top: 30px;
        }
        p{
            color: #f1f1f1;
        }
        .mm{
            width: 600px;
            height: 140px;
            margin-left: 22%;
            border-radius: 50px 50px 50px 50px;
        }
        
    </style>
</head>

<body>
    <?
    $ID = $_GET['ID'];
    $data = mssql_query("SELECT * FROM news WHERE ID={$ID}")
?>
    
    <img class="mm" src="./images/ข่าวสาร.png"><br><br>
    <br>
    <? while ($info = mssql_fetch_array($data)) {
                    $news = iconv("tis-620", "utf-8", $info['News']);
                    $day = iconv( "tis-620", "utf-8", $info['Day']);
                    $image = iconv( "tis-620", "utf-8", $info['Image']);
                   
                ?>
                <?php } ?>
    <div class="container">
        <img src="uploads/<?php echo $image; ?>" alt="news" style="width:100%;">
        <div class="content">
            <h1><?php echo $news; ?></h1>
            <p><?php echo $day; ?></p>
        </div>
    </div>

</body>

</html>