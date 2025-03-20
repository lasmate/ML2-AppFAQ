<?php
// Check if user is logged in
if (!isset($_SESSION['id_user']) || empty($_SESSION['id_user'])) {
    // User is not logged in, redirect to login page
    header('Location: ../FAQ/Account/connexion.php');
    exit();
}elseif(!isset($_SESSION['id_ligue']) || $_SESSION['id_ligue'] != 4){
    // Display access denied message
    echo '<div class="access-denied">Vous n\'avez pas accès à cette page.</div>';
    error_log("Access denied for user ID: " . $_SESSION['id_user'] . " at " . date('Y-m-d H:i:s'));
    // Display session data before redirect
    // echo '<div class="session-data"><h3>Session Data:</h3><pre>';
    // print_r($_SESSION);
    // echo '</pre></div>';
    // Wait 3 seconds then redirect to index
    header("Refresh: 3; URL=../index.php");
    exit();
}
?>