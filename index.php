<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/magicpatrnhome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Réponso'Ligue</title>
    
</head>

<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title">Accueil</div>
    <?php include "FAQ/components/navbar.php"; ?>    
    <div class="flex-container">
   
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
