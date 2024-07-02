<?php
session_start();
if (isset($_SESSION['log']) && $_SESSION['log'] === true) {
    session_unset();
    header("Location: ./index.php");
}
