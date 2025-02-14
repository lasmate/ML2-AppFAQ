<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Réponso'Ligue</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15vh;
        }
        table td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        table img {
            width: 25vw;
        }
    </style>
</head>
<body>
    <div class="flex-title"> <h1>Accueil</h1> </div>
    <div class="flex-container">
        <p class='flex-nav' style="text-align: center">nom prenom</p>
    <div class="flex-nav"> <a href="index.php">Acceuil</a></div>
    <div class="flex-nav" id="FAQ"><p> FAQ </p>
            <div class="flex-nav-Column"> <a href="FAQ/FAQBask.php">Basket</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQFoot.php">Football</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQHand.php">Handball</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/FAQVolle.php">Volley</a></div>
    </div>
    <div class="flex-nav" id="Account"><p> Compte </p> 
            <div class="flex-nav-Column"> <a href="FAQ/Account/inscription.php">Inscription</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/Account/connexion.php">Connexion</a></div>
            <div class="flex-nav-Column"> <a href="FAQ/Account/deconnexion.php">Deconnexion</a></div>
    </div>
</div>
    <div class="flex-page">
        <table>
            <tr>
                <td>
                    <div style="background-image: url('media/basket.jpeg'); background-size: cover; width: 100%; height: 20vh;" onclick="location.href='FAQ/FAQBask.php'">
                    </div>
                </td>
                <td>
                    <div style="background-image: url('media/foot.jpeg'); background-size: cover; width: 100%; height: 20vh;" onclick="location.href='FAQ/FAQBask.php'">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="background-image: url('media/hand.jpg'); background-size: cover; width: 100%; height: 20vh;" onclick="location.href='FAQ/FAQBask.php'">
                    </div>
                </td>
                <td>
                    <div style="background-image: url('media/volley.jpg'); background-size: cover; width: 100%; height: 20vh;" onclick="location.href='FAQ/FAQBask.php'">
                    </div>
                </td>
            </tr>
        </table>
    </div>
<?php include 'FAQ/components/footer.php';?>
</body>
</html>