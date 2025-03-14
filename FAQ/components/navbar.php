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
    <div class="flex-nav" onclick="location.href='../index.php'">Accueil</div>
    <div class="flex-nav" id="FAQ"><p> FAQ </p>
        <div class="flex-nav-Column" onclick="location.href='FAQBask.php'">Basket</div>
        <div class="flex-nav-Column" onclick="location.href='FAQFoot.php'">Football</div>
        <div class="flex-nav-Column" onclick="location.href='FAQHand.php'">Handball</div>
        <div class="flex-nav-Column" onclick="location.href='FAQVolle.php'">Volley</div>
    </div>
    <div class="flex-nav" id="Account"><p> Compte </p> 
        <div class="flex-nav-Column" onclick="location.href='Account/inscription.php'">Inscription</div>
        <div class="flex-nav-Column" onclick="location.href='Account/connexion.php'">Connexion</div>
        <div class="flex-nav-Column" onclick="location.href='Account/deconnexion.php'">Deconnexion</div>
    </div>
</div>