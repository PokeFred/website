<?php
    $username = "trivium";
    $password = "1234";
    $loginCheck = $backend->customRequest("/login/check?username=" . $username . "&password=" . $password);
    $_SESSION['login'] = $loginCheck['result'];
    $_SESSION['accountID'] = $loginCheck['id'];

    header("Location: " . "/home");
?>