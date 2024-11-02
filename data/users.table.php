<?php 


$sql = "CREATE TABLE IF NOT EXISTS `users`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(250) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `role` ENUM('admin','user') NOT NULL default 'user',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)"; 

// execution 
$result = mysqli_query($conn,$sql);

if($result){
    echo "Table users created successfully <br>";
}


$password = password_hash("password",PASSWORD_DEFAULT);
$sql = "INSERT INTO `users`(`name`,`email`,`password`,`phone`) 
VALUES('ahmed ali','ahmed@eraasoft.com','$password','01025123659')
,('saad ahmed','saad@eraasoft.com','$password','01254856588')
,('hatim ebraheem','hatim@gmail.com','$password','01025232699')

";

mysqli_query($conn,$sql);