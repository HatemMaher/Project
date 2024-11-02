<?php 


$sql = "CREATE TABLE IF NOT EXISTS `categories`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL
)"; 

// execution 
$result = mysqli_query($conn,$sql);

if($result){
    echo "Table categories created successfully <br>";
}


$sql = "INSERT INTO `categories`(`title`) 
VALUES('first category')
,('second category')
,('third category')
,('fourth category')
,('fifith category')
";

mysqli_query($conn,$sql);