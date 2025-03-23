<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    const FAQ_ID = 1;
    include "../components/session_handler.php"; 
    include "../components/header.php"; 
    include "../components/msglist.php"; 
    checkUserSessionAccess(FAQ_ID);
    $faqdata = fetchFAQ(FAQ_ID);
    $userdata = fetchUsers();
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);
    ?>
</head>
<bodyv class="magicpattern">
    <div class="flex-container">
        <p class='flex-nav' style="text-align: center">nom prenom</p>
        <div class="flex-nav" onclick="location.href='index.php'"><span>Accueil</span></div>
        <div class="flex-nav" id="Account">
            <p>Compte</p>
            <div class="flex-nav-Column" onclick="location.href='FAQ/Account/inscription.php'"><span>Inscription</span></div>
            <div class="flex-nav-Column" onclick="location.href='FAQ/Account/connexion.php'"><span>Connexion</span></div>
            <div class="flex-nav-Column" onclick="location.href='FAQ/Account/deconnexion.php'"><span>Déconnexion</span></div>
        </div>
    </div>
    <div class="flex-landing">
        <div class="flex-grid">
            <div class="flex-item" style="background-image: url('../../media/foot.jpeg');" onclick="location.href='FAQ/FAQFoot.php'">
                <div class="flex-title">
                    Administration
                </div>
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Foot</h2>
                </div>
            </div>
        </div>
    </div>
    <?php include "../components/Qlist.php"; ?>
</div>
<?php include '../../FAQ/components/footer.php'; ?>   

</body>
</html>
