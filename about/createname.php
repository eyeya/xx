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
    <title>จัดการข้อมูลคณะกรรมการสัมพันธ์</title>
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

<body>
    <br>
    <form action="about/storename.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">
        <h2 class="w3-center">ฟอร์มเพิ่มข้อมูลคณะกรรมการกิจการสัมพันธ์</h2>

        <h5>ตำแหน่ง</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='fas fa-address-card' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="position" type="text" placeholder="ตำแหน่ง">
            </div>
        </div>

        <h5>ชื่อ</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="name" type="text" placeholder="ชื่อ">
            </div>
        </div>

        <h5>นามสกุล</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="lastname" type="text" placeholder="นามสกุล">
            </div>
        </div>
        <h5>แผนก</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i  class='fas fa-poll-h' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <?
                $data = mssql_query("SELECT * FROM department");
                ?>

                <select class="w3-input w3-border" style="width:400px" name="department">

                    <option selected="" value="">--- กรุณาเลือกแผนก --- </option>
                    <?
                    while ($info = mssql_fetch_array($data)) {

                    ?>
                        <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['Department']) ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <h5>บทบาทหน้าที่</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='fas fa-clone' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="role" type="role" placeholder="บทบาทหน้าที่">
            </div>
        </div>

        <h5>ไฟล์รูปภาพ</h5>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="fa fa-file-picture-o" style="font-size:36px"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="file" name="image" onchange="loadFile(event)" /> <br>
                <img id="showimg" src="uploads/<?php echo $image; ?>" style="height:270px; width:200px;">
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