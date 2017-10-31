<!doctype html>
<html>
<?php include_once "head_begin.php" ?>
<link href="css/style.css" rel="stylesheet">
<?php include_once "head_end.php" ?>
<body>
<?php include_once "header.php" ?>

<?php
if (isset($_GET['page_index'])) {
    $page_index = $_GET['page_index'];
} else {
    $page_index = 0;
}
$posts = get_posts($category_id = 1);
$total_posts = get_total_posts($category_id = 1);

if ($page_index + 1 > ($total_posts / constant("PAGE_SIZE"))) {
    $page_index = ($total_posts / constant("PAGE_SIZE")) - 1;
}
?>

<article class="blogs">
    <h1 class="t_nav">
        <span>“慢生活”不是懒惰，放慢速度不是拖延时间，而是让我们在生活中寻找到平衡。</span>
        <a href="/index.php" class="n1">网站首页</a>
        <a href="/slow_life.php" class="n2">慢生活</a>
    </h1>
    <div class="newblog left">
        <?php foreach ($posts as $post) { ?>
            <h2><?php echo $post['title'] ?></h2>
            <p class="dateview">
                <span>发布时间：<?php echo date("Y-m-d", strtotime($post['create_time'])) ?></span>
                <span>作者：<?php echo $post['author_name'] ?></span>
                <span>分类：[<a href="/news/life/">程序人生</a>]</span>
            </p>
            <figure><img src="images/001.png"></figure>
            <ul class="nlist">
                <p><?php echo $post['summary'] ?>...</p>
                <a title="<?php echo $post['title']?>" href="/post.php?page_id=<?php echo $post['page_id']?>&category_id=<?php echo $post['category_id']?>" target="_self" class="readmore">阅读全文>></a>
            </ul>
            <div class="line"></div>
        <?php } ?>
        <div class="blank"></div>
        <div class="ad">
            <img src="images/ad.png">
        </div>
        <div class="page">
            <a title="Total record">
                <b><?php echo $total_posts ?></b>
            </a>
            <?php if ($page_index != 0) { ?>
                <a href="/slow_life.php?page_index=<?php echo $page_index + 1 ?>">&lt;&lt;</a>
                <a href="/slow_life.php?page_index=<?php echo $page_index ?>">&lt;</a>
                <a href="/slow_life.php?page_index=<?php echo $page_index ?>"><?php echo $page_index ?></a>
            <?php } ?>
            <b><?php echo $page_index + 1 ?></b>
            <?php if ($page_index != ($total_posts / constant("PAGE_SIZE")) -1) { ?>
                <a href="/slow_life.php?page_index=<?php echo $page_index + 1 ?>"><?php echo $page_index + 2 ?></a>
                <a href="/slow_life.php?page_index=<?php echo $page_index + 1 ?>">&gt;</a>
                <a href="/slow_life.php?page_index=<?php echo $page_index + ($total_posts / constant("PAGE_SIZE")) ?>">&gt;&gt;</a>
            <?php } ?>
        </div>
    </div>
    <aside class="right">
        <div class="rnav">
            <ul>
                <li class="rnav1"><a href="/download/" target="_blank">日记</a></li>
                <li class="rnav2"><a href="/newsfree/" target="_blank">程序人生</a></li>
                <li class="rnav3"><a href="/web/" target="_blank">欣赏</a></li>
                <li class="rnav4"><a href="/newshtml5/" target="_blank">短信祝福</a></li>
            </ul>
        </div>
        <?php include_once "aside.php" ?>
    </aside>
</article>
<?php include_once "footer.php" ?>
</body>
</html>