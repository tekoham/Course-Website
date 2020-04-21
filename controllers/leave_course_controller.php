<?php
    $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');    if(isset($_GET['name'])){
        $_SESSION['course_id'] = $_GET['name'];
        $result = mysqli_query($connect, "DELETE FROM user_courses WHERE  course_id = '{$_SESSION['course_id']}' AND user_id = '{$_SESSION['user_id']}'" );
    }                                                                                             
?>