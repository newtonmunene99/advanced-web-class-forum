<?php
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
        $sql = "INSERT INTO user(email,name,password) VALUES('$email','$name','$password')";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['login'])) {
        $email = $_POST['login']['email'];
        $password = $_POST['login']['password'];
        $sql = "SELECT email,password FROM user WHERE email='$email'";
        $processQuery = mysqli_query($conn, $sql);

        if (mysqli_num_rows($processQuery) == 1) {
            if (mysqli_fetch_assoc($processQuery)["password"] === $password) {
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

        $sql = "INSERT INTO post(author,body,date) VALUES('1','$body','$date')";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    }

} else {
    echo "CONNECTION TO THE DB FAILED";

}
