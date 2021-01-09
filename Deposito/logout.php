<?php

session_start();

session_unset();

session_destroy();

header('Location: /e-commerce-tpuppet1/Deposito/index.php');

?>