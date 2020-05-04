<?php
    $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');
    $course_name = $type = $description = $image_link = $youtube_link = $teacher_id = "";

    if(isset($_POST['add'])){
        $course_name = $_POST['course_name'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $image_link = $_POST['image_link'];
        $youtube_link = $_POST['youtube_link'];
        $teacher_id = $_POST['teacher_id'];
        $result = mysqli_query($connect, "INSERT INTO courses (course_name, type, description, image_link, youtube_link, teacher_id) VALUE ('$course_name', '$type', '$description', '$image_link', '$youtube_link', '$teacher_id');");
    }

    if(isset($_POST['Delete'])){
        $course_id = $_POST['Delete'];
        $result = mysqli_query($connect, "DELETE FROM courses WHERE course_id = $course_id ;");
    }
?>
