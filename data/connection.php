<?php 

$conn = mysqli_connect("localhost","root","","clean_blog");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}