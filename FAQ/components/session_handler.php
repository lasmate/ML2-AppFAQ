<?php
// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
/**
* Check if the user is logged in and has the right usertype to access the page.
* If the user is not logged in or does not have the right access, redirect them to the appropriate page.
* @param int $FAQ_ID: The ID of the FAQ to check access against.
* @return bool: true if the user has proper access, otherwise redirects to the appropriate page.
*/ 
function checkUserSessionAccess($FAQ_ID) {
    // First check if FAQ_ID is valid
    if ($FAQ_ID !== null && ($FAQ_ID < 1 || $FAQ_ID > 4)) {
        // Invalid FAQ ID, redirect to index page
        header("Location: ../index.php");
        exit();
    }
    $accessStatus = 0; // Default status (no issues)
    
    // Determine access status based on conditions
    if (!isset($_SESSION['id_user']) || empty($_SESSION['id_user'])) {
        $accessStatus = 1; // Not logged in
    } elseif ((strpos($_SERVER['PHP_SELF'], "Admin") !== false || strpos($_SERVER['PHP_SELF'], "del") !== false || strpos($_SERVER['PHP_SELF'], "mod") !== false) && 
                $_SESSION['id_usertype'] > 2) {
        $accessStatus = 2; // Non admin user trying to access admin page
    } elseif ($FAQ_ID !== null && (!isset($_SESSION['id_ligue']) || (($_SESSION['id_ligue'] != $FAQ_ID) && $_SESSION['id_usertype'] != 1))) {
        $accessStatus = 3; // Not authorized for this FAQ
    }
    
    // Handle access based on status code
    switch ($accessStatus) {
        case 1: // Not logged in
            header('Location: ../FAQ/Account/connexion.php');
            exit();    
        case 2: // Non admin user trying to access admin page
        case 3: // Not authorized for this FAQ
            echo '<div class="access-denied">Vous n\'avez pas accès à cette page.</div>';
            error_log("Access refuse pour ID: " . $_SESSION['id_user'] . " at " . date('Y-m-d H:i:s'));
            header("Location: ../index.php");
            exit();  
        case 0: // No issues, proper access
        default:
            return true;
    }
}
?>