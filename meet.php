<?
$data = mssql_query("SELECT *FROM meet where status='1' ");

echo "</tables>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

</head>
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
<style>
    body {
        font-family: 'Prompt', sans-serif;

    }

    img {
        height: 150px;
        width: 100px;
        /* box-shadow: 0 0 40px rgb(33, 65, 96); */
    }

    .zoom {
        width: 100px;
        height: auto;
    }

    .zoom:hover {
        transform: scale(1.5);
    }

    td {
        background-color: #EBECE7;
        text-align: center;

    }

    th {
        text-align: center;
        background-color: #75464A;
        color: white;
    }
</style>

<body>

    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>รายงานการประชุม</th>
                    <th>หัวเรื่องรายงาาน</th>
                    <th>ไฟล์แนบ</th>
                </tr>
            </thead>

            <tbody>
                <? while ($info = mssql_fetch_array($data)) {
                    $details = iconv("tis-620", "utf-8", $info['Details']);
                    $day = iconv( "tis-620", "utf-8", $info['Day']);
                    $image = iconv( "tis-620", "utf-8", $info['Image']);
                    $filename = iconv( "tis-620", "utf-8", $info['Filename']);
                ?>

                    <tr>
                        <td width="30%"><img class="zoom" id="showimg" src="uploads/<?php echo $image ?>"></td>
                        <td><br><br><?php echo $details; ?><br><br><?php echo $day; ?>
                            <br><br>
                        </td>

                        <td><br><br><button type="button" class="btn btn-outline-primary"><a href="uploads/<?php echo $filename?>" download/Download File>Download </a>
                            </button></td>
                    </tr> <?php } ?>

               
            </tbody>
        </table>
    </div>

</body>

</html>