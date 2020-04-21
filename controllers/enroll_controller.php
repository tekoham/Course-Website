<?php
    $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');    if(isset($_GET['course_id'])){
        $_SESSION['course_id'] = $_GET['course_id'];
        $result = mysqli_query($connect, "INSERT INTO user_courses (`course_id`, `user_id`) VALUES ('{$_SESSION['course_id']}', '{$_SESSION['user_id']}')");
    }
?> 