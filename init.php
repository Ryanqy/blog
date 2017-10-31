<?php

date_default_timezone_set('Asia/Shanghai');

define("PAGE_SIZE", 4);

function connect_database()
{

//    $config['db_host'] = '47.91.231.105';
    $config['db_host'] = 'localhost';
    $config['db_user'] = 'root';
    $config['db_password'] = 'root';
    $config['db_scheme'] = 'blog';
    $config['db_port'] = '3306';

    $connection = mysqli_connect($config['db_host'], $config['db_user'], $config['db_password'], $config['db_scheme'], $config['3306']);

    if ($connection->connect_error) {
        die('Connect Error (' . $connection->connect_errno . ')' . $connection->connect_error);
    }

    return $connection;
}

function get_total_posts($category_id = null){
    $connection = connect_database();
    $query = "select count(*) as total from posts";
    if (isset($category_id)) {
        $query .= "where category_id = {$category_id}";
    }

    $result = mysqli_query($connection, $query);

    $data=mysqli_fetch_assoc($result);

    mysqli_close($connection);

    return $data['total'];
}

function get_posts($category_id = null, $post_id = null, $page_index = 0, $page_size = null)
{

    $connection = connect_database();

    $posts = array();
    $query = "select posts.post_id as post_id, posts.category_id as category_id, title, summary, author_name, contents, update_time, create_time, categories.name from posts, categories where posts.category_id = categories.category_id";

    if (isset($post_id)) {
        $post_id = (int)$post_id;
        $query .= " and posts.post_id = {$post_id}";
    }

    if (isset($category_id)) {
        $category_id = (int)$category_id;
        $query .= " and categories.category_id = {$category_id}";
    }

    if (!isset($page_size)) {
        $page_size = constant("PAGE_SIZE");
    }

    $query .= " order by posts.post_id desc" . " limit " . $page_size * $page_index . ' , ' . $page_size;

    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }

    mysqli_free_result($result);
    mysqli_close($connection);

    return $posts;
}

