<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/main.css">
    <link rel="stylesheet" href="../../style/magicpatrnhome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Réponso'Ligue</title>
    
</head>

<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title">
        Accueil
    </div>
    <div class="flex-container">
        <p class='flex-nav' style="text-align: center">Administrateur</p>
        <div class="flex-nav" onclick="location.href='index.php'"><span>Accueil</span></div>
        <div class="flex-nav" id="FAQ">
            <p>FAQ</p>
            <div class="flex-nav-Column" onclick="location.href='FAQ/FAQBask.php'">Basket</div>
            <div class="flex-nav-Column" onclick="location.href='FAQ/FAQFoot.php'">Football</div>
            <div class="flex-nav-Column" onclick="location.href='FAQ/FAQHand.php'">Handball</div>
            <div class="flex-nav-Column" onclick="location.href='FAQ/FAQVolle.php'">Volley</div>
        </div>
        <div class="flex-nav" id="Account">
            <p>Compte</p>
            <div class="flex-nav-Column" onclick="location.href='FAQ/Account/inscription.php'"><span>Inscription</span></div>
            <div class="flex-nav-Column" onclick="location.href='FAQ/Account/connexion.php'"><span>Connexion</span></div>
            <div class="flex-nav-Column" onclick="location.href='FAQ/Account/deconnexion.php'"><span>Déconnexion</span></div>
        </div>
    </div>
    <div class="flex-landing">
        <div class="flex-grid">
            <div class="flex-item" style="background-image: url('../../media/basket.jpg');" onclick="location.href='FAQ/FAQBask.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de basket</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'FAQ/components/footer.php'; ?>   

</body>
</html>
