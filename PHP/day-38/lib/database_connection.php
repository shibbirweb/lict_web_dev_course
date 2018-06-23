<?php
define('HOSTNAME', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'first_db');


$link = mysqli_connect(HOSTNAME, DBUSER, DBPASS, DBNAME) or die("Error : ". mysqli_error($link));