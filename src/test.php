<?php
if ($_SESSION['user_logged_in'] !== true) {
    header('Location: /login.php');
}
// comment
omg_important_private_functionality_here();
