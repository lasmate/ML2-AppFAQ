<!DOCTYPE html>
<html lang="en">

<head>
<?php
    session_start();
    const FAQ_ID = 0;
    include "FAQ/components/session_handler.php"; 
    include "FAQ/components/header.php";
    include "FAQ/components/msglist.php"; 
    $faqdata = fetchFAQ(FAQ_ID);
    $userdata = fetchUsers(); 
    
?>
</head>

<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title">Accueil</div>
    <?php include "FAQ/components/navbar.php"; ?>    
    <div class="flex-landing">
        <div class="flex-grid">
            <div class="flex-item" style="background-image: url('media/basket.jpg');" onclick="location.href='FAQ/FAQBask.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de basket</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('media/foot.jpeg');" onclick="location.href='FAQ/FAQFoot.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Foot</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('media/hand.jpg');" onclick="location.href='FAQ/FAQHand.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Handball</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('media/volley.jpg');" onclick="location.href='FAQ/FAQVolle.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Volley</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'FAQ/components/footer.php'; ?>   

</body>
</html>
