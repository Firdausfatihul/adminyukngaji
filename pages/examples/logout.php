<?php
    session_start();

    if (isset($_GET['logout'])){
        session_destroy();
        header("pages/examples/login.php");
    }