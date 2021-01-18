<?php
if ($_POST['username']) {
    // without db
    $username = $_POST['username'];
    $password = $_POST['password'];

    // default 
    // user : password
    if ($username == 'user' && $password == 'password') {
        $_SESSION['user'] = [
            'user' => $username,
            'username' => $username
        ];
        // header('location: ')
    } else {
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}
