<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>คำตอบ</title>
</head>
<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM qa WHERE ID='$ID'")
    or die(mssql_error());

?>
<style>
    body {
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

    input[type=reset] {
        background-color: #787A79;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=reset]:hover {
        background-color: #656C5C;
    }
</style>

<body>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $question = iconv("tis-620", "utf-8", $info['Question']);
        $answer = iconv("tis-620", "utf-8", $info['Answer']);
    ?>
        <form action="qa/updateqa.php?ID=<?php echo $info['ID']; ?>" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">
            <div >
                <h2 align="center">ตอบคำถาม</h2>

                <h5>ลำดับ</h5>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-edit' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="id" value="<?php echo $ID; ?>" />
                    </div>
                </div>

                <h5>คำถาม</h5>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-exclamation' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="question" type="text" value="<?php echo $question; ?>" />
                    </div>
                </div>

                <h5>คำตอบ</h5>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:36px'></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="answer" type="text" placeholder="คำตอบ">
                    </div>
                </div>

                <p class="w3-center">
                    <input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="reset" value="Cancel" />
                </p>
        </form>
    <?php } ?>
</body>

</html>