<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 02.02.16
 * Time: 21:45
 */
    session_start();
    session_unset();
    header('Location: index.php')

?>