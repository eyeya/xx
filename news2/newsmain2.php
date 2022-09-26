<?

$sql2        = "SELECT *FROM cover WHERE Type ='6'";
$result2     = $db_tm->sql_query($sql2);
$rows2      = $db_tm->sql_fetchrow($result2);
$image2     = $rows2['Image'];
$path2       = '../xx/uploads/';


echo "</tables>";

?>


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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        /* * {
            box-sizing: border-box;
        } */

        body {

            font-size: 17px;
            font-family: 'Prompt', sans-serif;
        }

      

       
        .container .content {
           
            bottom: 0;
            background: rgb(0, 0, 0);
            /* Fallback color */
            background: rgba(0, 0, 0, 0.5);
            /* Black background with 0.5 opacity */
            color: #f1f1f1;
            width: 80%;
            margin-left: 100px;
            padding: 20px;
           
        }

        .btn {
            margin-left: 30px;
            margin-top: 30px;
        }

        p {
            color: #f1f1f1;
        }

        .mm {
            width: 600px;
            height: 140px;
            margin-left: 22%;
            border-radius: 50px 50px 50px 50px;
        }

        .mySlides {
            /* display: none; */
            width: 600px;
            height: 250px;
            margin-left: 190px;
        }

        .slide1 {
            margin-left: 10px;
            

        }

        .slide2 {
            margin-left: 700px;
            margin-right: 70px;
        }

        /* .aa{
            width: 50%;
            height: 50%;
        } */
    </style>
</head>

<body>

    <?
    $ID = $_GET['ID'];
    $data = mssql_query("SELECT * FROM news WHERE ID={$ID}")
    ?>
    <img class="mm" src="<? echo $path2 . $image2; ?>"><br><br>
    <br>
    <? while ($info = mssql_fetch_array($data)) {
        $news = iconv("tis-620", "utf-8", $info['News']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
        $image = iconv("tis-620", "utf-8", $info['Image']);

    ?>
    <?php } ?>

    <?php $tags = explode(',', $image);
    foreach ($tags as $value) {

    ?><div class="container">
        <div>
            <img class="mySlides" src="uploads/<?php echo $value; ?>" alt="news">
        <?php } ?>
        <button class="slide1" onclick="plusDivs(-1)">&#10094;</button>
        <button class="slide2" onclick="plusDivs(1)">&#10095;</button>
        </div>

        
        <div class="content">
            <h1><?php echo $news; ?></h1>
            <p><?php echo $day; ?></p>
        </div>
    </div>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }
        </script>
</body>

</html>