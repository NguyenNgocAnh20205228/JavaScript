<?php

include "connect_db/connect_db.php";
unset($_SESSION['user']);
header('location:index.php');

?>