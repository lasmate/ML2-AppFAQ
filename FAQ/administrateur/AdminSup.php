
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    session_start();
    const FAQ_ID = 4;
    //include "../components/session_handler.php";
    include "../components/header.php"; 
    include "../components/msglist.php";
    //checkUserSessionAccess(FAQ_ID);
    $faqdata = fetchFAQ(FAQ_ID);
    $userdata = fetchUsers();
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);
?>
</head>
<body>
<div class="magicpattern"/>
    <div class="flex-container">
        <?php include "../components/navbar.php"; ?>
    </div>
    <div class="flex-landing">
            <div class="flex-item" style="background-image: url('../../media/basket.jpg');" onclick="location.href='FAQ/FAQBask.php'">
            <div class="flex-title">
                Administration
            </div>
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de basket</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/foot.jpeg');" onclick="location.href='FAQ/FAQFoot.php'">
            <div class="flex-title">
                Administration
            </div>
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Foot</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/hand.jpg');" onclick="location.href='FAQ/FAQHand.php'">
            <div class="flex-title">
                Administration
            </div>
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Handball</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/volley.jpg');" onclick="location.href='FAQ/FAQVolle.php'">
            <div class="flex-title">
                Administration
            </div>
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Volley</h2>
                </div>
            </div>
        </div>
        <div class="flex-landing">
            <p>yerhb</p>
        </div>
</div>
<?php include '../../FAQ/components/footer.php'; ?>   
</body>
</html>
