<?

$sql        = "SELECT *FROM cover WHERE Type ='4'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
$image      = $rows['Image'];
$path       = '../xx/uploads/';



echo "</tables>";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>
<style>
  body {
    font-family: 'Prompt', sans-serif;

  }

  * {
    box-sizing: border-box;
  }

  input[type=text],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
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

  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
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

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }


  h2 {
    text-align: center;
    font-family: 'Prompt', sans-serif;
  }

  .aa {
    text-align: center;
  }

  h3 {
    font-family: 'Prompt', sans-serif;
  }

  .nm {
    width: 600px;
    height: 130px;
    margin-left: 25%;
    border-radius: 65px 65px 65px 65px;
  }
</style>
</head>

<body>

<img  class="nm" src="<? echo $path . $image; ?>"><br><br>


  <div class="container">
    <form action="./comment/storecomment.php" method="post" class="  w3-text-blue ">

      <h3>เรื่อง</h3>
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:35px'></i></div>

        <div class="w3-rest">
          <input class="w3-input w3-border" name="subject" type="text" placeholder="เรื่อง...">
        </div>
      </div>


      <h3>ข้อร้องเรียน</h3>
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class='fas fa-pen-nib' style='font-size:36px'></i></div>

        <div class="w3-rest">
          <textarea name="story" placeholder="เขียนอะไรบางอย่าง" style="height:200px"></textarea>
        </div>
      </div>

      <div class="aa">
        <input type="submit" name="submit" value="ส่ง" />&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="cancle" value="ยกเลิก" />
      </div>
    </form>
  </div>

</body>

</html>