<?php
session_start();
session_unset();
session_destroy();

if (isset($_GET['act'])) {
    if ($_GET['act'] == 'user') {
        header("Location: ../user/login.php");
    } elseif ($_GET['act'] == 'admin') {
        header("Location: ../admin/login.php");
    } elseif ($_GET['act'] == 'mechanic') {
        header("Location: ../mechanic/login.php");
    }
    exit;
}
?>
