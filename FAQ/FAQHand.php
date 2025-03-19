<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header('Location: ../FAQ/Account/connexion.php');
    exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "components/header.php"; ?>
<?php include "components/msglist.php"; ?>
<?php 
    if($_SESSION['id_ligue'] != 4){
        // Display access denied message
        echo '<div class="access-denied">Sorry, you do not have access to this page.</div>';
        // Wait 5 seconds then redirect to index
        header("Refresh: 5; URL=../index.php");
        exit();}
    $faqdata = fetchFAQ(4);
    $userdata = fetchUsers(); // corrected function name to maintain consistency
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);
?>
</head>
<body class="magicpattern">
    <div class="flex-title"> FAQ Handball </div>
    <?php include "components/navbar.php"; ?>
    <div class="flex-page">
        <div class="flex-menu"> trier
            <div class="flex-container">
                <span class="add-button" onclick="location.href='FAQModification/msgadd.php'"  ><span class="material-symbols-outlined">add</span></span>
            </div> 
        </div>
        <div class="flex-content">
            <?php include "components/Question.php";?>
        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>