<?php

require_once ("includes/config.php");

if (!$GLOBALS['DEBUG'] && $GLOBALS['STAGE'] == "development" && !in_array($_SERVER['REMOTE_ADDR'], $GLOBALS['DEVELOPMENT_IPS'])) {
    header('Location: /development.html');
}

?>