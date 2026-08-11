<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/add_que.php" method="post">
        <table style="width:80%;margin:auto">
            <tr>
                <td>問卷名稱</td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                   <td colspan='2'>
                    <div id='option'>
                        選項<input type="text" name="option[]" style="width:50%" >
                        <button type="button" onclick='more()'>更多</button>
                    </div>
                </td>
            </tr>
        </table>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="清空">
        </div>
    </form>
</fieldset>
<fieldset>
    <legend>問卷列表</legend>
    <table>
        <tr>
            <td>問卷名稱</td>
            <td>投票數</td>
            <td>開放</td>
        </tr>


    <?php 
    $ques=$Que->all(['main_id'=>0]);
    foreach($ques as $idx => $que):
    ?>
        <tr>
            <td>
                <?= $idx+1 ?>.
                <?= $que['text'] ?>
            </td>
            <td><?= $que['vote'] ?></td>
            <td>
            <button onclick="active(<?= $que['id'] ?>)" id="btn<?= $que['id'] ?>"><?= ($que['sh']==1)?'關閉':'開啟'?></button>
            </td>
        </tr>
    <?php 
    endforeach;
    ?>
        </table>
</fieldset>


<script>
function active(id){
    $.post("./api/active_que.php",{id},()=>{
        //location.reload()
        console.log($("#btn"+id).text())
        switch($("#btn"+id).text()){
            case "關閉":
                $("#btn"+id).text("開啟");
            break;
            case "開啟":
                $("#btn"+id).text("關閉");
            break;
        }
    })
}
function more(){
 let opt=`<div id='option'>
                    選項<input type="text" name="option[]" style="width:60%" >
                </div>`
 $("#option").before(opt)
}
</script>