<?php
        // Start session
        session_start();

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "app-faq_m2l";

        // Check if form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = $_POST["password"];
            $remember = isset($_POST["remember"]);
            
            try {
                // Connect to database
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // Query to find user
                $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
                $stmt->execute([$username]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if ($user && password_verify($password, $user["password"])) {
                    // Login successful
                    $_SESSION["logged_in"] = true;
                    $_SESSION["user_id"] = $user["id"];
                    $_SESSION["username"] = $user["username"];
                    
                    // Handle "remember me" functionality
                    if ($remember) {
                        $token = bin2hex(random_bytes(32));
                        $tokenStmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
                        $tokenStmt->execute([$token, $user["id"]]);
                        setcookie("remember_token", $token, time() + (86400 * 30), "/");
                        setcookie("user_id", $user["id"], time() + (86400 * 30), "/");
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

        $conn = null;
?>