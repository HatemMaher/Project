<?php


function check_method($method){
    if($_SERVER['REQUEST_METHOD']== $method){
        return true;
    }
    return false;
}


function sanitize_input($name){
    $input = trim($_POST[$name]);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input; 
}


function admin_public_path($path){
    return BASE_URL."admin/public/".$path."/";
}


function admin_view($path){
    return ADMIN_PATH."views/".$path.".view.php";
}

function admin_url($path){
    return BASE_URL."admin/index.php?page=".$path;
}