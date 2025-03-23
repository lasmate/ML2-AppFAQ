<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    include "../components/session_handler.php"; 
    include "../components/header.php";
    

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app-faq_m2l";

    // Function to handle "remember me" functionality
    function handleRememberMe($conn, $user_id) {
        $token = bin2hex(random_bytes(32));
        $tokenStmt = $conn->prepare("UPDATE user SET remember_token = ? WHERE id = ?");
        $tokenStmt->execute([$token, $user_id]);
        setcookie("remember_token", $token, time() + (86400 * 30), "/");
        setcookie("user_id", $user_id, time() + (86400 * 30), "/");
    }

    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];
        $remember = isset($_POST["remember"]);
        
        try {
            // Connect to database using DB credentials, not form inputs
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Query to find user
            $stmt = $conn->prepare("SELECT id_user, pseudo, mdp, id_ligue, id_usertype FROM user WHERE pseudo = :username"); // added id_ligue to the query
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && $password === $user["mdp"]) {
                // Login successful
                $_SESSION["logged_in"] = true;
                $_SESSION["id_user"] = $user["id_user"];
                $_SESSION["id_ligue"] = $user["id_ligue"];
                $_SESSION["id_usertype"] = $user["id_usertype"];
                $_SESSION["username"] = $user["pseudo"];
                
                $_SESSION["success"] = "Vous êtes maintenant connecté.";
                
                // Handle "remember me" functionality
                if ($remember) {
                    handleRememberMe($conn, $user["id_user"]); // corrected to use the correct user ID
                }
                
                $_SESSION["success"] = "Vous êtes maintenant connecté."; // added success message
                header("Location: ../../index.php"); // Redirect after successful login
                exit();
            } 
            $_SESSION["error"] = "Nom d'utilisateur ou mot de passe incorrect.";
            header("Location: connexion.php");
            exit();
        } catch (PDOException $e) {
            $_SESSION["error"] = "Erreur de connexion: " . $e->getMessage();
            header("Location: connexion.php");
            exit();
        }
    }
?>
</head>
<body class="magicpattern">
<div class="flex-title">Connexion</div>
<?php require_once "../components/navbar.php"; ?>
    <div class="flex-page">
    <div class="login-box">
        <form method="post">
        <?php
            if (isset($_SESSION["error"])) {
                echo '<div class="error-message">' . htmlspecialchars($_SESSION["error"]) . '</div>';
                unset($_SESSION["error"]);
            }
        
            if (isset($_SESSION["success"])) {
                echo '<div class="success-message">' . htmlspecialchars($_SESSION["success"]) . '</div>';
                unset($_SESSION["success"]);
            }
        ?>
        <div class="textbox">
            <label for="username">Pseudo:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="textbox">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Se souvenir de moi</label>
        </div>
        <div class="button">
            <button type="submit">Se connecter</button>
        </div>
        </form> 
    </div>
</body>
</html>