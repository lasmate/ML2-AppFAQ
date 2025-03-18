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
