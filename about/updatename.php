<?php 

 // ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

 $objDB = mssql_select_db("work1");

 $ID = $_GET['ID'];

 $position = iconv("utf-8", "tis-620", $_POST['Position']);
 $name = iconv("utf-8", "tis-620", $_POST['name']);
 $lastname = iconv("utf-8", "tis-620", $_POST['lastname']);
 $department = iconv("utf-8", "tis-620", $_POST['department']);
 $role = iconv("utf-8", "tis-620", $_POST['role']);
 
 $image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
 $tmp_name = $_FILES['image']['tmp_name'];

 $sql = ("UPDATE about SET Position='{$position}', Name='{$name}', Lastname='{$lastname}', Department='{$department}', Role='{$role}' WHERE ID='{$ID}'");

 $objQuery = mssql_query($sql);

 //เช็คว่ามีรูปมั้ย
 if(!empty($_FILES['image']['tmp_name'])){
    move_uploaded_file($tmp_name,"../uploads/".$_FILES['image']['name']);    
}

?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=1&Submenu=indexname";
</script>