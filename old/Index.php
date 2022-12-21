<?php
    session_start();
    if (empty($_SESSION['login'])) {
        $_SESSION['login'] = false;
    }

    require "WebsiteTemplate/WebsiteTemplate.php";

    /*
    $username = "trivium";
    $password = "1234";
    $loginCheck = $backend->customRequest("/login/check?username=" . $username . "&password=" . $password);
    $_SESSION['login'] = $loginCheck['result'];
    $_SESSION['accountID'] = $loginCheck['id'];
    */

    $websiteTemplate = new WebsiteTemplate();
    $websiteTemplate->renderStart();
?>

<?php
    $siteIndex = array(
        "login", "logout",
        "home"
    );

    if ($_SESSION['login']) {
        $_SESSION['page'] = "Home";
        if (!empty($_GET['page']) && in_array($_GET['page'], $siteIndex)) {
            $_SESSION['page'] = $_GET['page'];

            if ($_SESSION['page'] == "title") {
                header("Location: " . "/home");
            }
        } else {
            header("Location: " . "/home");
        }
    } else {
        if (!empty($_GET['page'] && $_GET['page'] != "home")) {
            header("Location: " . "/home");
        } else {
            $_SESSION['page'] = "/home";
        }
    }

    require "pages/" . $_SESSION['page'] . ".php";

    $websiteTemplate->renderEnd();
?>