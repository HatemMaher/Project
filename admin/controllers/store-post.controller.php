<?php 

require_once BASE_PATH."core/validation.php";
$errors = [];

if(check_method("POST")){

    $title = sanitize_input('title');
    $content = sanitize_input('content');

    // name =>  required , string(a-zA-Z0-9 .) , min:3 , max : 200 

   if(required($title)){
        $errors['title'] = "title is required";
   }elseif(min_input($title,10)){
        $errors['title'] = "title must be at least 10 characters long";
   }




   if(empty($errors)){
        // insert data 
        $result = insert('posts',[
            'title' => $title,
            'content' => $content,
        ]);
        if($result){
            set_session("success","post sent successfully");
        }
    }else{
        set_session("errors",$errors);
    }

   header("Location: ".admin_url("add-post"));
   exit;

}else{
    require_once "views/404.views.php";
}