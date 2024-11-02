<?php

function required($input){
    if (empty($input)) {
        return true;
    }
    return false;
}

function min_input($input, $length){
    if (strlen($input) < $length) {
        return true;
    }
    return false;
}

function max_input($input, $length){
    if (strlen($input) > $length) {
        return true;
    }
    return false;
}

function valid_name($input){
    $pattern= "/^[a-zA-Z0-9 .]+$/";
    if (preg_match($pattern, $input)) {
        return true;
    }
    return false;
}

function valid_email($input){
    if(filter_var($input, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}


function valid_phone($input){
    if (ctype_digit($input) && strlen($input) < 15) {
        return true;
    }
    return false;
}


function valid_message($input){
    $pattern = "/^[a-zA-Z0-9 .,!?]+$/";
    if(preg_match($pattern, $input) && strlen($input > 10) || strlen($input < 1000)){
        return true;
    }
    return false;
}