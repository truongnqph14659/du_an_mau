<?php
if (isset($_SESSION['user_account'])) {
    unset($_SESSION['user_account']);
    header('location:index.php');
    die;
}
header('location:index.php');
