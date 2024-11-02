<?php 


$sql = "CREATE TABLE IF NOT EXISTS `posts`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)"; 

// execution 
$result = mysqli_query($conn,$sql);

if($result){
    echo "Table posts created successfully <br>";
}



$sql = "INSERT INTO `posts`(`title`,`content`) 
VALUES('first post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('second post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('third post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('fourth post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('fifth post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('first post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('second post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('third post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('fourth post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('fifth post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('first post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('second post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('third post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('fourth post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
,('fifth post','
Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatum eaque enim ipsum iure quasi doloremque fuga atque fugiat. Aliquam!
')
";

mysqli_query($conn,$sql);