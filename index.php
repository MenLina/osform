<?php
session_start();
if(isset($_SESSION['username'])) {
    require "forms/reviewForm.php";
} else  {
    require "forms/auth.php";
}

