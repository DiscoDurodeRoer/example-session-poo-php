<?php

    require "Session.php";

    $session = new Session();

    $session->setAttribute("usuario", "fernando");

    echo $session->getAttribute("usuario") . "<br/>"; 

    $session->deleteAttribute("usuario");

    echo $session->getAttribute("usuario") . "<br/>"; 

    $session->destroySession();

?>