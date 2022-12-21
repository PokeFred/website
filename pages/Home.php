<?php
    $websiteTemplate = new WebsiteTemplate();
    $websiteTemplate->setSubtitle("");
    $websiteTemplate->renderStart();
    
    if ($_SESSION['login']) {
        ?>
            <button onclick="window.location.href='/logout'" class="border border-white rounded-xl px-4 py-py">Logout</button>
            <br>
            <button onclick="window.location.href='/account'" class="border border-white rounded-xl px-4 py-py">My Account</button>
        <?php
    } else {
        ?>
            <button onclick="window.location.href='/login'" class="border border-white rounded-xl px-4 py-py">Login</button>
        <?php
    }
?>

<br>

<?php
    if ($_SESSION['login']) {
        echo "Welcome back, " . $_SESSION['accountID'];
        echo "<br>";
    }
?>

Home

<?php

    $websiteTemplate->renderEnd();
?>