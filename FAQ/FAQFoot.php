
<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
 include "components/session_handler.php"; 
 include "components/header.php"; 
 include "components/msglist.php"; 
    $faqdata = fetchFAQ(1);
    $userdata = fetchUsers(); // corrected function name to maintain consistency
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);
?>
</head>
<body class="magicpattern">
    <div class="flex-title"> FAQ Football </div>
    <?php include "components/navbar.php"; ?>
    <div class="flex-page">
        <div class="flex-menu">
            <div class="flex-container">
                <span class="add-button" onclick="location.href='FAQModification/msgadd.php'"><span class="material-symbols-outlined">add</span></span>
            </div> 
        </div>
        <div class="flex-content">
            <?php include "components/Question.php"; ?>
        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>