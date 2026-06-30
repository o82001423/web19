<?php
include_once "db.php";

echo $chk= $Mem->count(['acc'=>$_GET['acc']]);


?>