<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    return;
}
?>