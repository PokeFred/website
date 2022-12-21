<?php
    session_start();
    if (empty($_SESSION['login'])) {
        $_SESSION['login'] = false;
    }

    require "WebsiteTemplate/WebsiteTemplate.php";

    if (isset($_GET['page'])) {
        if ($_SESSION['login']) {
            $siteIndex = array("home", "logout", "account");
        } else {
            $siteIndex = array("home", "login");
        }
    
        if (in_array($_GET['page'], $siteIndex)) {
            $_SESSION['page'] = $_GET['page'];
        } else {
            header("Location: /home");
        }
    } else {
        header("Location: /home");
    }

    require "pages/" . $_SESSION['page'] . ".php";

?>