<?php
session_start();
if(!isset($_SESSION["email"]))
{
header("Location: tlogin.php");
exit();

}
?>
