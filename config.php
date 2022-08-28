<?php

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ar';
} elseif (
    isset($_GET['lang']) &&
    $_SESSION['lang'] != $_GET['lang'] &&
    !empty($_GET['lang'])
) {
    if ($_GET['lang'] == 'ar') {
        $_SESSION['lang'] = 'ar';
    } elseif ($_GET['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
    }
}

include 'languages/lang/' . $_SESSION['lang'] . '.php';