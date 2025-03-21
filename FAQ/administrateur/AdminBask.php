<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header('Location: ../Account/connection.php');
    exit();
}
else {
    // User is logged in, check if he is a super admin
    if ($_SESSION['usertype'] != '1'|| $_SESSION['usertype'] != '2') {
        // User is not a super admin, redirect to home page
        header('Location: ../../index.php');
        exit();
    }
}
?>
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
        <p class='flex-nav' style="text-align: center">Administrateur</p>
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
            <div class="flex-item" style="background-image: url('../../media/basket.jpg');" onclick="location.href='FAQ/FAQBask.php'">
                <div class="flex-title">
                    Administration
                </div>
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de basket</h2>
                </div>
            </div>
        </div>
    </div>
    <?php include "../components/Qlist.php"; ?>
</div>
<?php include '../../FAQ/components/footer.php'; ?>   

</body>
</html>
