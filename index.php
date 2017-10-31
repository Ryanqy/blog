<!doctype html>
<html>
<?php include_once "head_begin.php" ?>
<link href="css/index.css" rel="stylesheet">
<?php include_once "head_end.php" ?>
<body>
<?php include_once "header.php" ?>

<?php
$posts = get_posts();
?>
<div class="banner">
    <section class="box">
        <ul class="texts">
            <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
            <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
            <p>加了锁的青春，不会再因谁而推开心门。</p>
        </ul>
        <div class="avatar"><a href="#"><span>吴通</span></a></div>
    </section>
</div>
<div class="template">
    <div class="box">
        <h3>
            <p><span>个人博客</span>模板 Templates</p>
        </h3>
        <ul>
            <li><a href="/" target="_blank"><img src="images/01.jpg"></a><span>仿新浪博客风格・梅――古典个人博客模板</span></li>
            <li><a href="/" target="_blank"><img src="images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
            <li><a href="/" target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
            <li><a href="/" target="_blank"><img src="images/04.jpg"></a><span>女生清新个人博客网站模板</span></li>
            <li><a href="/" target="_blank"><img src="images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
            <li><a href="/" target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
        </ul>
    </div>
</div>
<article>
    <h2 class="title_tj">
        <p>文章<span>推荐</span></p>
    </h2>
    <div class="bloglist left">

        <?php foreach ($posts as $post) { ?>
            <h3><?php echo $post['title'] ?></h3>
            <figure><img src="images/001.png"></figure>
            <ul>
                <p><?php echo $post['summary'] ?>...</p>
                <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
            </ul>
            <p class="dateview">
                <span><?php echo date("Y-m-d", strtotime($post['create_time'])) ?></span><span>作者：<?php echo $post['author_name'] ?></span><span>个人博客：[<a
                            href="/news/life/">程序人生</a>]</span>
            </p>
        <?php } ?>

        <div class="blank"></div>
        <div class="ad">
            <img src="images/ad.png">
        </div>
        <div class="page">
            <a title="Total record">
                <b>41</b>
            </a>
            <b>1</b>
            <a href="/news/s/index_2.html">2</a>
            <a href="/news/s/index_2.html">&gt;</a>
            <a href="/news/s/index_2.html">&gt;&gt;</a>
        </div>
    </div>
    <aside class="right">
        <div class="weather">
            <iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true"
                    src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe>
        </div>
        <?php include_once "aside.php" ?>
        <a href="/" class="weixin"> </a>
    </aside>
</article>
<?php include_once "footer.php" ?>
</body>
</html>
