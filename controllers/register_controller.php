<?php
            $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');            //is set
            $name = $email = $password = $confirmPassword= "";
            function alert($message) {
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            $alert = "";
            if(isset($_POST['signUp'])){
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $confirmPassword = trim($_POST['confirmPassword']);
                $isPassed = true;

                if($confirmPassword != $password and $password != ''){
                    $alert .= "confirmPassword doesn\'t match! Try again";
                    $isPassed = false;
                }             

                if($alert) alert($alert);

                if($isPassed){        
                    $result = mysqli_query($connect, "
                        SELECT email FROM user WHERE email = '$email'
                    ");
                    $num = mysqli_num_rows($result);
                    if($num > 0){
                        alert("This email has been used");
                    } else {
                        $result = mysqli_query($connect, "
                        INSERT INTO user (name, email, password) VALUE ('$name', '$email', '$password')
                        ");
                        if($result){
                            alert("Sign Up successfully");
                        } else {
                            alert("Fail");
                        }
                    }
                  }
             };
?>