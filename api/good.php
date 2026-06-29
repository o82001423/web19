<?php include_once "db.php";

$chk=$Log->count(['user'=>$_SESSION['login'],'news'=>$_POST['id']]);
$post=$News->find($_POST['id']);

if($chk){
    $Log->del(['user'=>$_SESSION['login'],'news'=>$_POST['id']]);
    $post['good']--;
}else{
    $Log->save(['user'=>$_SESSION['login'],'news'=>$_POST['id']]);
    $post['good']++;
}

$News->save($post);