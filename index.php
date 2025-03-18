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
    <div class="flex-title">
        Accueil
    </div>
    <div class="flex-container">
    <?php
        session_start();
        
        $displayName = "non connecté";
        
        if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
            $displayName = htmlspecialchars($_SESSION['username']);
        } 
        elseif (isset($_COOKIE['user_id'])) {
            // Get username from database using cookie ID
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "app-faq_m2l";
            
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $conn->prepare("SELECT pseudo FROM users WHERE id = :id");
                $stmt->bindParam(':id', $_COOKIE['user_id']);
                $stmt->execute();
                
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result && isset($result['pseudo'])) {
                    $displayName = htmlspecialchars($result['pseudo']);
                }
            } catch (PDOException $e) {
                // Keep default display name if error
            }
        }
        
        echo "<p class='flex-nav' style='text-align: center'>" . $displayName . "</p>";
    ?>
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
