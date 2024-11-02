<?php 

require_once BASE_PATH."core/validation.php";
$errors = []; 

if(check_method("POST")){
    $name = sanitize_input('name');
    $email =sanitize_input('email');
    $phone = sanitize_input('phone');
    $message = sanitize_input('message');


    // validation for name
    if(required($name)){
        $errors['name'] = "name is required";
    }elseif (min_input($name,3) || max_input($name, 200 )) {
        $errors['name'] = "name must be at between 3 to 200 characters";
    }elseif (!valid_name($name)) {
        $errors['name'] = "name must be from a-z and 0-9";
    }

    // validation for email
    if(required($email)){
        $errors['email'] = "email is required";
    }elseif (!valid_email($email)) {
        $errors['email'] = "Email must be like: example@email.com";
    }


    // validation for phone
    if(required($phone)){
        $errors['phone'] = 'phone number is required';
    }elseif (!valid_phone($phone)) {
        $errors['phone'] = "Enter Valid phone number";
    }

    // validation for message
    if(required($message)){
        $errors['message'] = 'message is required';
    }elseif (!valid_message($message)) {
        $errors['message'] = "message must be letters, numbers, spaces and between 10 and 1000 characters.";
    }

    // var_dump($errors);


    if(empty($errors)){
        // insert data 
        $result = insert('messages',[
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'content' => $message
        ]);
        
        if ($result) {
            set_session("success", "message sent successfully");
        }
    }else {
        set_session("errors",  $errors);

    }

    header("location: ".BASE_URL."index.php?page=contact");
    exit;

}else{
    require_once"views/404.views.php";
}