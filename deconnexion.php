<?php

require_once 'lib.inc.php';

$_SESSION=array();

session_destroy();

header('location:formConnexion.php');

?>