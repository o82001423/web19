<?php include_once "db.php";

$user=$Mem->find(['email'=>$_GET['email']]);

if(!empty($user)){
        echo "您的帳號為:".$user['pw'];
}else{
        echo "持查無資料";
}