<?php
require('conn.php');

#for login

if (isset($_POST['login'])) {
    $query = "SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result = mysqli_query($con, $query);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['password'])) {
                echo "
                <script>alert('Thank You for login in ');
                window.location.href='index1.php';
                </script>
                ";
            } else {
                echo "
                <script>alert('Incorrect Password');
                window.location.href='index2.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>alert('Not Registered Pls register');
            window.location.href='register.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>alert('cannot run query');
        window.location.href='index1.php';
        </script>
        ";
    }
}
#for registration
if (isset($_POST['register'])) {
    if (empty($_POST['fullname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "
        <script>alert('Please fill in all the required fields');
        window.location.href='register.php';
        </script>
        ";
        exit();
    }
    $user_exist_query = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) 
            {
                echo "
                    <script>alert('$result_fetch[username] - username already taken');
                    window.location.href='index2.php';
                    </script>
                    ";
            } 
            else {
                echo "
                    <script>alert('$result_fetch[email] - email already taken');
                    window.location.href='index2.php';
                    </script>
                    ";
            }
        } 
        else 
        #if no username is taken
        {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
            if (mysqli_query($con, $query)) {
                echo "
                    <script>alert('registeration successful');
                    window.location.href='index1.php';
                    </script>
                    ";
            } 
            else
             {
                echo "
                    <script>alert('cannot run query');
                    window.location.href='index2.php';
                    </script>
                    ";
            }
        }
    } 
            else {
        echo "
                    <script>alert('cannot run query');
                    window.location.href='index2.php';
                    </script>
                    ";
    }
}
