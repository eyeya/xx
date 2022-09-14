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
    <title>เพิ่มข้อมูลข้อมูลข่าวสาร</title>
</head>
<style>
    body {
        font-family: 'Prompt', sans-serif;

    }


    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    input[type=submit]:hover {
        background-color: #45a049;
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

    h2,
    h5 {
        font-family: 'Prompt', sans-serif;
    }
</style>
<boby>
    <form action="news2/storenews2.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data"><br>
        <h2 class="w3-center">เพิ่มข้อมูลข่าวสาร</h2>

        <h5>ไฟล์รูปภาพข้อมูลข่าวสาร</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="fa fa-file-picture-o" style="font-size:36px"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="file" name="image" onchange="loadFile(event)" /> <br>
                <img id="showimg" src="uploads/<?php echo $image; ?>" style="height:270px; width:200px;">
            </div>
        </div>

        <h5>วัน เดือน ปี ของข่าวสาร</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="day" type="day" placeholder="วว/ดด/ปป ของข่าวสาร">
            </div>
        </div>

        <h5>ชื่อของข่าวสาร</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='fas fa-book-open' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="header" type="text" placeholder="ชื่อข่าวสาร">
            </div>
        </div>

        <h5>รายละเอียดข่าวสาร</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='fas fa-book-reader' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="news" type="text" placeholder="รายละเอียดข่าวสาร">
            </div>
        </div>

        <p class="w3-center">
            <input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" name="cancel" value="Cancel" />
        </p>
    </form>

    </body>
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

</html>