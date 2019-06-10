<?php
    session_start();

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "en";
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "en")
            $_SESSION['lang'] = "en";
        else if ($_GET['lang'] == "fr")
            $_SESSION['lang'] = "fr";
        else if ($_GET['lang'] == "es")
            $_SESSION['lang'] = "es";
        else if ($_GET['lang'] == "sw")
            $_SESSION['lang'] = "sw";
        else if ($_GET['lang'] == "ge")
            $_SESSION['lang'] = "ge";            
    
    }



    require_once "languages/" . $_SESSION['lang'] . ".php";
?>