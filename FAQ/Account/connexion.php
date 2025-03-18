<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // Start session
    session_start();
?>
<?php require_once "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<link rel="stylesheet" href="../../style/account.css">
<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app-faq_m2l";

    // Function to handle "remember me" functionality
    function handleRememberMe($conn, $user_id) {
        $token = bin2hex(random_bytes(32));
        $tokenStmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
        $tokenStmt->execute([$token, $user_id]);
        setcookie("remember_token", $token, time() + (86400 * 30), "/");
        setcookie("user_id", $user_id, time() + (86400 * 30), "/");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $formUsername = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];
        $remember = isset($_POST["remember"]);
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Query to find user
            $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = :username");
            $stmt->bindParam(':username', $formUsername, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user["password"])) {
                // Login successful
                $_SESSION["logged_in"] = true;
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                
                // Handle "remember me" functionality
                if ($remember) {
                    handleRememberMe($conn, $user["id"]);
                }
                
                header("Location: ../index.php"); // Redirect after successful login
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
<?php require_once "../components/navbarbis.php"; ?>
    <div class="flex-page">
    <div class="login-box">
        <form action="../components/login_process.php" method="post">
        <form method="post">
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