<?php
session_start();

if (isset($_REQUEST['notice'])) {
    $_SESSION['notice'] = $_REQUEST['notice'];
}

header("Location: /at-home-dog-boarding-course", true, 302);
?>