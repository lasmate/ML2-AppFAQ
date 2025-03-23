<div class="flex-container">
<?php

        $displayName = "non connecté";
        
        if (isset($_SESSION['id_user']) && isset($_SESSION['username'])) {
            $displayName = htmlspecialchars($_SESSION['username']);
        } 
        elseif (isset($_COOKIE['id_user'])) {
            // Get username from database using cookie ID
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "app-faq_m2l";
            
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $conn->prepare("SELECT pseudo FROM users WHERE id = :id");
                $stmt->bindParam(':id', $_COOKIE['id_user']);
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
    <div class="flex-nav" id="home">Accueil</div>
    <div class="flex-nav" id="FAQ"><p> FAQ </p>
        <div class="flex-nav-Column" id="FAQBask">Basket</div>
        <div class="flex-nav-Column" id="FAQFoot">Football</div>
        <div class="flex-nav-Column" id="FAQHand">Handball</div>
        <div class="flex-nav-Column" id="FAQVolle">Volley</div>
    </div>
    <div class="flex-nav" id="Account"><p> Compte </p> 
        <div class="flex-nav-Column" id="inscription">Inscription</div>
        <div class="flex-nav-Column" id="connexion">Connexion</div>
        <div class="flex-nav-Column" id="deconnexion">Deconnexion</div>
    </div>
    <script>
        document.getElementById('home').onclick = function() { location.href='../../index.php'; };
        document.getElementById('FAQBask').onclick = function() { location.href='../FAQBask.php'; };
        document.getElementById('FAQFoot').onclick = function() { location.href='../FAQFoot.php'; };
        document.getElementById('FAQHand').onclick = function() { location.href='../FAQHand.php'; };
        document.getElementById('FAQVolle').onclick = function() { location.href='../FAQVolle.php'; };
        document.getElementById('inscription').onclick = function() { location.href='inscription.php'; };
        document.getElementById('connexion').onclick = function() { location.href='connexion.php'; };
        document.getElementById('deconnexion').onclick = function() { location.href='deconnexion.php'; };
    </script>
</div>