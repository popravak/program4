
<?php
date_default_timezone_set("Europe/Berlin");
echo "Date: " . date("d.m.Y") . "<br>";
echo "Day: " . date("l") . "<br>";
echo "Time: " . date("h:i:sa") . "<br>";
echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server IP: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Server IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
?>

