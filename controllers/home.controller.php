<?php 



$all_data = select_data('posts',"LIMIT 5");
require_once BASE_PATH.'views/home.views.php';