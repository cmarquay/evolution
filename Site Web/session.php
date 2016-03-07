<?php
    session_start();
    if(isset($_SESSION) && !empty($_SESSION)) {
        $sessionActive=1;
    }
?>