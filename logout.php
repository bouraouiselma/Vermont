<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['userRole']);
session_destroy();
header('location:Vermont.php');