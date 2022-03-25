<?php

$host = $_GET[‘host’];

echo system(“ping -c 3 $host”);

?>
