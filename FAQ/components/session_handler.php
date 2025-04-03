<?php
/**
* Function to check if the user is logged in and has proper access rights to the specified FAQ.
* @param int $FAQ_ID: The ID of the FAQ to check access against.
* @return bool: true if the user has proper access, otherwise redirects to the appropriate page.
*/ 
function checkUserSessionAccess($FAQ_ID) {
    if ($FAQ_ID < 1 || $FAQ_ID > 4) {
        // Invalid FAQ ID, redirect to index page
        header("Location: ../index.php");
        exit();
    }
    if (!isset($_SESSION['id_user']) || empty($_SESSION['id_user'])) {
        // User is not logged in, redirect to login page
        header('Location: ../FAQ/Account/connexion.php');
        exit();
    } elseif (strpos($_SERVER['PHP_SELF'], "Admin") == true && $_SESSION['id_usertype'] > 2) {
        // Display access denied message
        echo '<div class="access-denied">Vous n\'avez pas accès à cette page.</div>';
        error_log("Access denied for user ID: " . $_SESSION['id_user'] . " at " . date('Y-m-d H:i:s'));

        header("Location: ../index.php");
        exit();
    } elseif ((!isset($_SESSION['id_ligue']) || ($_SESSION['id_ligue'] != $FAQ_ID) && $_SESSION['id_usertype'] != 1)) {
        // Display access denied message
        echo '<div class="access-denied">Vous n\'avez pas accès à cette page.</div>';
        error_log("Access denied for user ID: " . $_SESSION['id_user'] . " at " . date('Y-m-d H:i:s'));

        header("Location: ../index.php");
        exit();
    }
    
    // If we reach this point, user has proper access
    return true;
}
?>