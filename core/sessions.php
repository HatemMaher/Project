<?php 


function set_session($key,$value){
    $_SESSION[$key]=$value;
}

function get_session($key){
    return $_SESSION[$key] ?? null;
}


function has_session($key){
    return isset($_SESSION[$key]);
}

function remove_session($key){
    unset($_SESSION[$key]);
}

function flash_session($key){
    if(has_session($key)){
        $value = get_session($key);
        remove_session($key);
        return $value;
    }
    return null;
}