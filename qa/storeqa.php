<?php

$answer = iconv("utf-8", "tis-620", $_POST['answer']);
$question = iconv("utf-8", "tis-620", $_POST['question']);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO qa";
$strSQL .= "(answer,question)";
$strSQL .= "VALUES";
$strSQL .= "('" . $answer . "','" . $question . "')";
$strSQL .= mssql_query($strSQL);

//upload file in folder


?>

<script type="text/javascript">
    window.location = "indexqa.php";
</script>