<?php

$subject = iconv("utf-8", "tis-620", $_POST['subject']);
$story = iconv("utf-8", "tis-620", $_POST['story']);
$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO comment ";
$strSQL .= "(subject,story)";
$strSQL .= "VALUES";
$strSQL .= "('" . $subject . "','" . $story . "')";
$objQuery = mssql_query($strSQL);

?>

<script type="text/javascript">
    window.location = "../admin.php?Menu=5&Submenu=indexcomment";
</script>