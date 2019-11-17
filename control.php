<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "csc316");

if ($conn) {
    // try {
    //     mysqli_query($conn, "CREATE TABLE IF NOT EXISTS user(id INT AUTO_INCREMENT,email VARCHAR(255) NOT NULL,name VARCHAR(255) NOT NULL,password VARCHAR(255) NOT NULL,PRIMARY KEY(id))");

    //     mysqli_query($conn, "CREATE TABLE IF NOT EXISTS post(id INT AUTO_INCREMENT,author INT(11) NOT NULL,body VARCHAR(500) NOT NULL,date DATE(255) NOT NULL,PRIMARY KEY(id),FOREIGN KEY (author) REFERENCES user(id))");

    // } catch (\Throwable $th) {
    //     throw $th;
    //     echo $th;
    // }

    if (isset($_POST['register'])) {

        $email = $_POST['register']['email'];
        $name = $_POST['register']['name'];
        $password = $_POST['register']['password'];

        $email = stripslashes($email);
        $name = stripslashes($name);
        $password = stripslashes($password);
        $email = mysql_real_escape_string($email);
        $name = mysql_real_escape_string($name);
        $password = mysql_real_escape_string($password);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user(email,name,password) VALUES('$email','$name','$hash')";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['login'])) {
        $email = $_POST['login']['email'];
        $password = $_POST['login']['password'];
        $sql = "SELECT id,name,email,password FROM user WHERE email='$email'";
        $processQuery = mysqli_query($conn, $sql);

        if (mysqli_num_rows($processQuery) == 1) {
            $row = mysqli_fetch_assoc($processQuery);
            if (password_verify($password, $row["password"])) {
                $_SESSION['user'] = $row;
                echo "Authenticated";

            } else {
                echo "Invalid password";

            }
        } else {
            echo "This email is not registered";
        }

    } elseif (isset($_POST['post'])) {
        $body = $_POST['post']['body'];
        $date = date('Y-m-d H:i:s');
        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO post(author,body,date) VALUES('$id','$body','$date')";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['comment'])) {
        $body = $_POST['comment']['body'];
        $post = $_POST['comment']['post'];
        $date = date('Y-m-d H:i:s');
        $id = $_SESSION['user']['id'];
        $sql = "INSERT INTO comment(author,post,body,date) VALUES('$id','$post','$body','$date')";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['postviews'])) {
        $post = $_POST['postviews']['post'];
        $sql = "UPDATE post SET views = views +1 WHERE id='$post'";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['postupvotes'])) {
        $post = $_POST['postupvotes']['post'];
        $sql = "UPDATE post SET upvotes = upvotes +1 WHERE id='$post'";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['logout'])) {
        echo session_destroy();
    }

} else {
    echo "CONNECTION TO THE DB FAILED";

}
