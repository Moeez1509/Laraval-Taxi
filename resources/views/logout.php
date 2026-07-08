<?php
session_start();
unset($_SESSION['uid']);
session_destroy();
echo "<script>alert('You have been logged out.'); window.location='index.php';</script>";
?>