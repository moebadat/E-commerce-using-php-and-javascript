<?php
/*This page logs the user out and directs them to the homepage*/
session_start();

unset($_SESSION["uid"]);

unset($_SESSION["name"]);

header("location:index.php");

?>