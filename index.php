<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Réponso'Ligue</title>

</head>

<body>

    <div class="flex-title">
        <h1>Accueil</h1>
    </div>
    <div class="flex-container">
        <p class='flex-nav' style="text-align: center">nom prenom</p>
        <div class="flex-nav"> <a href="index.php">Acceuil</a></div>
        <div class="flex-nav" id="FAQ">
            <p> FAQ </p>
            <div class="flex-nav-Column"> <a href="FAQ/FAQBask.php">Basket</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQFoot.php">Football</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQHand.php">Handball</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQVolle.php">Volley</a></div>
        </div>
        <div class="flex-nav" id="Account">
            <p> Compte </p>
            <div class="flex-nav-Column"> <a href="FAQ/Account/inscription.php">Inscription</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/Account/connexion.php">Connexion</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/Account/deconnexion.php">Deconnexion</a></div>
        </div>
    </div>
    <div class="flex-landing">
        <div class="flex-grid">
            <div class="flex-item" style="background-image: url('media/basket.jpeg');" onclick="location.href='FAQ/FAQBask.php'">
                <div style="height:100%;">
                    <h2>Ligue de basket</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('media/foot.jpeg');" onclick="location.href='FAQ/FAQFoot.php'">
                <div style="height:100%;">
                    <h2>Ligue de Foot</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('media/hand.jpg');" onclick="location.href='FAQ/FAQHand.php'">
                <div style="height:100%;">
                    <h2>Ligue de Handball</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('media/volley.jpg');" onclick="location.href='FAQ/FAQVolle.php'">
                <div style="height:100%;">
                    <h2>Ligue de Volley</h2>
                </div>
            </div>

        </div>
    </div>
    </div>
    <?php include 'FAQ/components/footer.php'; ?>
</body>

</html>
