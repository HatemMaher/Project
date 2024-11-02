<?php

function select_data($table,$limit=''){
    global $conn;
    $sql = "SELECT * FROM `$table` $limit ";
    $posts = mysqli_query($conn, $sql);

    if($posts){
        return map_data($posts);
    }else{
        return [];
    }
}


function get_row_by_id($table,$id){
    global $conn;
    $sql = "SELECT * from `$table` WHERE `id` = $id";
    $result = mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($result) ?? [];
}

function map_data($data){
    $all_data = [];
    while($row = mysqli_fetch_assoc($data)){
        $all_data[] = $row;
    }
    return $all_data;
}



function insert($table,$data){
    global $conn;
    $keys = "`" . implode('`,`', array_keys($data))."`";
    $values = "'".implode("','", array_values($data))."'";
    $sql = "INSERT INTO `$table` ($keys) VALUES($values) ";
    return mysqli_query($conn, $sql);


}


function delete($table,$id){
    global $conn;
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    return mysqli_query($conn, $sql);
}