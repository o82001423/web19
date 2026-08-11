<fieldset>
    <legend>>新增文章</legend>
    <form action="./api/save_news.php" method="post">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title" id="title" style="width:400px;height:30px;font-size:16px;color:back;">
        </div>
        <div>
            <label for="">文章分類</label>
            <select name="type" id="type">
                <option value="健康新知">健康新知</option>
                <option value="菸害防治">菸害防治</option>
                <option value="慢性病防治">慢性病防治</option>
            </select>
        </div>
        <div>
            <label for="">文章內容</label>
            <textarea name="content" id="content" style="width: 400px;height:250px;"></textarea>
        </div>
        <div class="ct">
            <input type="submit" value="新增">
            
            <input type="reset" value="重置">
        </div>
    </form>
</fieldset>