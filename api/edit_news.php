<?php 
include_once "db.php";

    foreach ($_POST['id'] as $id) {
        $news = $News->find($id);
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $news['del'] = 1;
            // $News->save($news);
        } else {
            $news['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        }
        $News->save($news);
    }
to("../admin.php?do=news");
