<?php
        $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');        $email = $password = "";
        function alert($message) {
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        $alert = "";
        if (isset($_POST['SignIn'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $checkemail = mysqli_query($connect,"SELECT * FROM user WHERE email ='$email'; ");
            $num = mysqli_num_rows($checkemail);
            if ($num > 0){
                $checkPassword = mysqli_query($connect,"SELECT * FROM user WHERE email = '$email' and password = '$password';");               
                $num2 = mysqli_num_rows($checkPassword);
                $user = mysqli_fetch_array($checkPassword);
                if ($num2 > 0){
                    $_SESSION['start'] = "start";
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];  
                    $_SESSION['user_id'] = $user['user_id'];                                                       
                    header("Location: index.php");
                }   else $alert = "Wrong Password";
            }else $alert = "This email has not been registered";
            if ($alert) alert($alert);
        }
    ?>