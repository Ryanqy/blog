<!doctype html>
<html>
<?php include_once "head_begin.php" ?>
<link href="css/style.css" rel="stylesheet">
<link href="css/post.css" rel="stylesheet">
<?php include_once "head_end.php" ?>
<body>
<?php include_once "header.php" ?>

<?php
$posts = get_posts($category_id = $_GET['category_id'], $post_id = $_GET['post_id']);
$post = current($posts);
?>

<article class="blogs">
    <h1 class="t_nav"><span>“慢生活”不是懒惰，放慢速度不是拖延时间，而是让我们在生活中寻找到平衡。</span>
        <a href="/" class="n1">网站首页</a><a href="/" class="n2">慢生活</a>
    </h1>
    <div class="newblog left">
        <h1 class="title"><?php echo $post['title']?></h1>
        <p class="box">
            <span class="time">发布时间: <?php echo date("Y-m-d", strtotime($post['create_time'])) ?></span>
            <span class="">编辑:<a href="mailto:547527682@qq.com">两条鱼</a></span>
            <span>阅读 (51)</span>
        </p>
        <?php echo $post['contents'] ?>
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