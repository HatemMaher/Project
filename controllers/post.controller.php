<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $post = get_row_by_id("posts",$id);
    require_once BASE_PATH.'views/post.views.php';
}
