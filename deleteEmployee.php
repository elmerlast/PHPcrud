<?php

if(!isset($_GET["id"])){
    die("id not found.");
}

$id = $_GET["id"];
if(!is_numeric($id)){
    die("id not a number.");
}

$sql=<<<sqls
delete from employee where employeeId = $id
sqls;

require("connDB.php");
mysqli_query($link,$sql);
header("location: index.php");
?>