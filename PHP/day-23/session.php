<?php
session_start();
/*$_SESSION['name'] = "Mostafizur";
$_SESSION['email'] = "mostafizur.ey@gmail.com";

echo "Your name is: ".$_SESSION['name']. "<br/>";
//session_unset();
echo "Your email is: ".$_SESSION['email']. "<br/>";
 * */
echo "<pre>";
print_r($_SESSION['session_dt']);
echo "<br />";