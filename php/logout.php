<?php
session_start();
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['email']);
unset($_SESSION['user_password']);
session_destroy();

header("Location: http://localhost/thePrelovedstore/indexfinal.html");
exit;
?>