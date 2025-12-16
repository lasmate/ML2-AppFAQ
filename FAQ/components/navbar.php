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
        <?php
        // Show modification link only when a user is connected
        if (isset($_SESSION['id_user']) && isset($_SESSION['username'])) {
            echo '<div class="flex-nav-Column" id="modification">Modification</div>';
        }
        ?>
    </div>
    <?php
    // Show admin link when user has admin privileges (minimal change)
    if (isset($_SESSION['id_usertype']) && $_SESSION['id_usertype'] == 1) {
        echo '<div class="flex-nav" id="Admin"><p> Admin </p></div>';
    }
    ?>
    <?php
    // Determine current file path for dynamic link generation
    $currentFile = basename($_SERVER['PHP_SELF']);

    // Generate links based on current file location
    switch ($currentFile) {
        case 'index.php':// Home page
            echo '<script>
                document.getElementById("home").onclick = function() { location.href="index.php"; };
                document.getElementById("FAQBask").onclick = function() { location.href="FAQ/FAQBask.php"; };
                document.getElementById("FAQFoot").onclick = function() { location.href="FAQ/FAQFoot.php"; };
                document.getElementById("FAQHand").onclick = function() { location.href="FAQ/FAQHand.php"; };
                document.getElementById("FAQVolle").onclick = function() { location.href="FAQ/FAQVolle.php"; };
                document.getElementById("inscription").onclick = function() { location.href="FAQ/Account/inscription.php"; };
                document.getElementById("connexion").onclick = function() { location.href="FAQ/Account/connexion.php"; };
                document.getElementById("deconnexion").onclick = function() { location.href="FAQ/Account/deconnexion.php"; };
                var m = document.getElementById("modification"); if(m) m.onclick = function(){ location.href="FAQ/Account/modification.php"; };
            </script>';
            break;
        case in_array($currentFile, ['FAQBask.php', 'FAQFoot.php', 'FAQHand.php', 'FAQVolle.php']):// FAQ pages
            echo '<script>
                document.getElementById("home").onclick = function() { location.href="../index.php"; };
                document.getElementById("FAQBask").onclick = function() { location.href="FAQBask.php"; };
                document.getElementById("FAQFoot").onclick = function() { location.href="FAQFoot.php"; };
                document.getElementById("FAQHand").onclick = function() { location.href="FAQHand.php"; };
                document.getElementById("FAQVolle").onclick = function() { location.href="FAQVolle.php"; };
                document.getElementById("inscription").onclick = function() { location.href="Account/inscription.php"; };
                document.getElementById("connexion").onclick = function() { location.href="Account/connexion.php"; };
                document.getElementById("deconnexion").onclick = function() { location.href="Account/deconnexion.php"; };
                var m = document.getElementById("modification"); if(m) m.onclick = function(){ location.href="Account/modification.php"; };
            </script>';
            break;
        case in_array($currentFile, ['inscription.php', 'connexion.php', 'deconnexion.php']):// Account pages
            echo '<script>
                document.getElementById("home").onclick = function() { location.href="../../index.php"; };
                document.getElementById("FAQBask").onclick = function() { location.href="../FAQBask.php"; };
                document.getElementById("FAQFoot").onclick = function() { location.href="../FAQFoot.php"; };
                document.getElementById("FAQHand").onclick = function() { location.href="../FAQHand.php"; };
                document.getElementById("FAQVolle").onclick = function() { location.href="../FAQVolle.php"; };
                document.getElementById("inscription").onclick = function() { location.href="inscription.php"; };
                document.getElementById("connexion").onclick = function() { location.href="connexion.php"; };
                document.getElementById("deconnexion").onclick = function() { location.href="deconnexion.php"; };
                var m = document.getElementById("modification"); if(m) m.onclick = function(){ location.href="modification.php"; };
            </script>';
            break;
        case in_array($currentFile, ['AdminBask.php', 'AdminFoot.php', 'AdminHand.php', 'AdminVolle.php', 'AdminSup.php']):// Admin pages
            echo '<script>
                document.getElementById("home").onclick = function() { location.href="../../index.php"; };
                document.getElementById("FAQBask").onclick = function() { location.href="../FAQBask.php"; };
                document.getElementById("FAQFoot").onclick = function() { location.href="../FAQFoot.php"; };
                document.getElementById("FAQHand").onclick = function() { location.href="../FAQHand.php"; };
                document.getElementById("FAQVolle").onclick = function() { location.href="../FAQVolle.php"; };
                document.getElementById("inscription").onclick = function() { location.href="../Account/inscription.php"; };
                document.getElementById("connexion").onclick = function() { location.href="../Account/connexion.php"; };
                document.getElementById("deconnexion").onclick = function() { location.href="../Account/deconnexion.php"; };
                var m = document.getElementById("modification"); if(m) m.onclick = function(){ location.href="../Account/modification.php"; };
            </script>';
            break;
        case in_array($currentFile, ['msgadd.php', 'msgmod.php', 'msgdel.php']):// Message pages
            echo '<script>
                document.getElementById("home").onclick = function() { location.href="../../index.php"; };
                document.getElementById("FAQBask").onclick = function() { location.href="../FAQBask.php"; };
                document.getElementById("FAQFoot").onclick = function() { location.href="../FAQFoot.php"; };
                document.getElementById("FAQHand").onclick = function() { location.href="../FAQHand.php"; };
                document.getElementById("FAQVolle").onclick = function() { location.href="../FAQVolle.php"; };
                document.getElementById("inscription").onclick = function() { location.href="../Account/inscription.php"; };
                document.getElementById("connexion").onclick = function() { location.href="../Account/connexion.php"; };
                document.getElementById("deconnexion").onclick = function() { location.href="../Account/deconnexion.php"; };
                var m = document.getElementById("modification"); if(m) m.onclick = function(){ location.href="../Account/modification.php"; };
            </script>';
            break;
        default:// Default case
            echo '<script>
                document.getElementById("home").onclick = function() { location.href="../../index.php"; };
                document.getElementById("FAQBask").onclick = function() { location.href="../FAQBask.php"; };
                document.getElementById("FAQFoot").onclick = function() { location.href="../FAQFoot.php"; };
                document.getElementById("FAQHand").onclick = function() { location.href="../FAQHand.php"; };
                document.getElementById("FAQVolle").onclick = function() { location.href="../FAQVolle.php"; };
                document.getElementById("inscription").onclick = function() { location.href="inscription.php"; };
                document.getElementById("connexion").onclick = function() { location.href="connexion.php"; };
                document.getElementById("deconnexion").onclick = function() { location.href="deconnexion.php"; };
                var m = document.getElementById("modification"); if(m) m.onclick = function(){ location.href="modification.php"; };
            </script>';
            break;
    }
        
    // If admin link is present, set its onclick to the correct relative path
    if (isset($_SESSION['id_usertype']) && $_SESSION['id_usertype'] == 1) {
        // Determine admin path depending on current file context
        $adminPath = '../administrateur/AdminSup.php';
        if ($currentFile === 'index.php') {
            $adminPath = 'FAQ/administrateur/AdminSup.php';
        } elseif (in_array($currentFile, ['FAQBask.php', 'FAQFoot.php', 'FAQHand.php', 'FAQVolle.php'])) {
            $adminPath = 'administrateur/AdminSup.php';
        } elseif (in_array($currentFile, ['inscription.php', 'connexion.php', 'deconnexion.php'])) {
            $adminPath = '../administrateur/AdminSup.php';
        } elseif (in_array($currentFile, ['AdminBask.php', 'AdminFoot.php', 'AdminHand.php', 'AdminVolle.php', 'AdminSup.php'])) {
            $adminPath = 'AdminSup.php';
        }
        echo '<script>var a=document.getElementById("Admin"); if(a) a.onclick=function(){ location.href="' . $adminPath . '"; };</script>';
    }
    ?>        
</div>