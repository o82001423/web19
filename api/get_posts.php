<?php include_once "db.php";

$list=$News->all(['type'=>$_GET['type']]);

foreach($list as $l){
echo "<a href='javascript:void(0)' style='margin:10px 0;display:block'>";
echo $l['title'];
echo "</a>";
}
?>