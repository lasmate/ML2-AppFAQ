<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    const FAQ_ID = 3;
    include "../components/session_handler.php"; 
    include "../components/header.php"; 

    checkUserSessionAccess(FAQ_ID);
    $faqdata = fetchFAQ(FAQ_ID);
    $userdata = fetchUsers();
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);
?>
</head>
<body class="magicpattern">
    <div class="flex-title"> FAQ Football </div>
    <?php include "../components/navbar.php"; ?>
    <div class="flex-page">
        <div class="flex-menu">
            <div class="flex-container">
                <div class="flex-item" style="background-image: url('../../media/volley.jpg');" onclick="location.href='FAQ/FAQVolle.php'">
                    <div class="flex-title">
                    Administrateur
                </div>
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Volley</h2>
                </div>
            </div>
        </div>
    </div>
    <?php include "../components/Qlist.php"; ?>
</div>
<?php include '../../FAQ/components/footer.php'; ?>   
</body>
</html>
