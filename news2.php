<?
$sql        = "SELECT *FROM news WHERE ID ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);

$sql2        = "SELECT *FROM news WHERE ID ='2'";
$result2     = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);
$numrows2    = $db_tm->sql_numrows($result2);

$sql3       = "SELECT *FROM news WHERE ID ='3'";
$result3     = $db_tm->sql_query($sql3);
$rows3       = $db_tm->sql_fetchrow($result3);
$numrows3    = $db_tm->sql_numrows($result3);

$sql4        = "SELECT *FROM news WHERE ID ='4'";
$result4     = $db_tm->sql_query($sql4);
$rows4       = $db_tm->sql_fetchrow($result4);
$numrows4    = $db_tm->sql_numrows($result4);

$sql5        = "SELECT *FROM news WHERE ID ='5'";
$result5     = $db_tm->sql_query($sql5);
$rows5       = $db_tm->sql_fetchrow($result5);
$numrows5    = $db_tm->sql_numrows($result5);

$sql6        = "SELECT *FROM news WHERE ID ='6'";
$result6     = $db_tm->sql_query($sql6);
$rows6       = $db_tm->sql_fetchrow($result6);
$numrows6    = $db_tm->sql_numrows($result6);

$sql7        = "SELECT *FROM news WHERE ID ='7'";
$result7     = $db_tm->sql_query($sql7);
$rows7       = $db_tm->sql_fetchrow($result7);
$numrows7    = $db_tm->sql_numrows($result7);

echo "</tables>";
?>
<head>
  <meta charset="UTF-8" />
</head> 
<style>
/* Create two unequal columns that floats next to each other */
  .column {
    float: left;
    padding: 10px;
    /* height: 300px;  */
    /* Should be removed. Only for demonstration */
  }
  
  .left {
    width: 33.3%;
    font-size: 14px;
  }
  
  .right {
    width: 33.3%;
    font-size: 14px;
    box-shadow: 10px chartreuse;
  }
  .center{
    width: 33.3%;
    font-size: 14px;
  }
#myImg {
border-radius: 5px;
cursor: pointer;
transition: 0.3s; 
box-shadow:0 0 30px rgb(241, 227, 187);
width :60%;
max-width:300px ;
}
#myImg:hover {opacity: 0.7;}
#href{
text-align: center;
    font-size: 12px;
}
/* mouse over link */
a:hover {
  color: #263e81;
}
.aa{
  color: #808080;
}
  </style>    
   
<body>


  <div class="row">
    
    <div class="column left" >
      <div align="center"><img src="../xx/images/n1 (2).png"  id="myImg"  ></div>
      <br><br>
      <b><a href="news2/news1.php"><? echo iconv("tis-620", "utf-8", $rows['News']);?></a></b><br>
      <i class="fa fa-calendar-o"></i><? echo iconv("tis-620", "utf-8", $rows['Day']);?></a>
      <br><br><br>

      <div align="center"><img src="../xx/images/n4.png" id="myImg" ></div><br><br>
      <b><a href="news2/news1.5.php"><? echo iconv("tis-620", "utf-8", $rows4['News']);?></a></b><br>
      <i class="fa fa-calendar-o"></i><? echo iconv("tis-620", "utf-8", $rows4['Day']);?></a>
      <br><br><br>

      <div align="center"><img src="../xx/images/ss.png" id="myImg" ></div><br><br>
      <b><a href="news2/news1.3.php"><? echo iconv("tis-620", "utf-8", $rows7['News']);?></a></b><br>
      <i class="fa fa-calendar-o"></i><? echo iconv("tis-620", "utf-8", $rows7['Day']);?></a>
    </div>

    <div class="column right" >
    <div align="center"><img src="../xx/images/n2.png" id="myImg" ></div><br><br>
      <b><a href="news2/news1.2.php"><? echo iconv("tis-620", "utf-8", $rows2['News']);?></a></b><br>
      <i class="fa fa-calendar-o"></i><? echo iconv("tis-620", "utf-8", $rows2['Day']);?></a>
      <br><br><br>
      <div align="center"><img src="../xx/images/n3 (2).png" id="myImg" ></div><br><br>
      <b><a href="news2/news1.6.php"><? echo iconv("tis-620", "utf-8", $rows5['News']);?></a></b><br>
      <i class="fa fa-calendar-o"></i><? echo iconv("tis-620", "utf-8", $rows5['Day']);?></a>
    </div>

    <div class="column center">
    <div align="center"><img src="../xx/images/n3.png" id="myImg"></div><br><br>
      <b><a href="news2/news1.4.php"><? echo iconv("tis-620", "utf-8", $rows3['News']);?></a></b><br>
      <i class="fa fa-calendar-o"></i><? echo iconv("tis-620", "utf-8", $rows3['Day']);?></a>
      <br><br><br>
      <div align="center"><img src="../xx/images/n6.png" id="myImg"></div><br><br>
      <b><a href="news2/news1.7.php"><? echo iconv("tis-620", "utf-8", $rows6['News']);?></a></b><br>
      <i class="fa fa-calendar-o"></i><? echo iconv("tis-620", "utf-8", $rows6['Day']);?></a>
      <br><br><br>
    </div>




  </div>

</body>