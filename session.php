<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "csc316");
$login_session;
if ($conn) {
    $user_check = $_SESSION['user']['id'];
    $sql = "SELECT id,email,name FROM user WHERE id='$user_check'";
    $processQuery = mysqli_query($conn, $sql);
    if (mysqli_num_rows($processQuery) == 1) {
        $login_session = mysqli_fetch_assoc($processQuery);
        if (!isset($login_session)) {
            mysql_close($connection);
            header('Location: index.php');
            echo "weeeeh";
        }
    } else {
        echo "This session is not valid";
    }

}
