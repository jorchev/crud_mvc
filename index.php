<?php

    require_once "config/database.php";
    require_once "controllers/AutomovilesController.php";

    $control = new AutomovilesController();
    $control->listado();

?>