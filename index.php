<?php
session_start();
if(isset($_SESSION['username'])) {
    require "forms/reviewform.php";
} else  {
    require "forms/auth.php";
}
?>
