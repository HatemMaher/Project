<?php 



function redirect($path){
    header('Location:index.php?page='.$path);
    die;
}