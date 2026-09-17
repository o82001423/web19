<style>
fieldset {
    display: inline-block;
    vertical-align: top;
}

.po-wrap {
    display: flex;
    gap: 18px;
    align-items: flex-start;
}

.po-panel {
    flex: 1;
}
</style>

<div>
    目前位置: 首頁 > 寶可夢分類 > <span class="nav-item"></span>
</div>

<div class="po-wrap">
    <fieldset style="width: 180px;">
        <legend>寶可夢分類</legend>
        <div class="type-item" style="cursor: pointer;">寶可夢圖鑑</div>
        <div class="type-item" style="cursor: pointer;">遊戲機對戰</div>
        <div class="type-item" style="cursor: pointer;">寶可夢卡牌</div>
        <div class="type-item" style="cursor: pointer;">聯盟挑戰賽</div>
    </fieldset>

    <fieldset class="po-panel" style="width: 550px;">
        <legend>文章列表</legend>
        <div class="post-list"></div>
        <div class="post-content" style="display:none;"></div>
    </fieldset>
</div>

<script>
$(".nav-item").text($(".type-item").eq(0).text())

getPosts($(".type-item").eq(0).text());

$(".type-item").on("click", function() {
    let text = $(this).text();
    $(".nav-item").text(text);
    getPosts(text);
})

function getPosts(type) {
    $.get("./api/get_posts.php", {type}, (list) => {
        $(".post-list").html(list)
        $(".post-list").show();
        $(".post-content").hide();

    })
}

function getPost(id) {
    $.get('./api/get_post.php', {id},(post) => {
        $(".post-content").html(post)
        $(".post-list").hide();
        $(".post-content").show();
    })
}
</script>