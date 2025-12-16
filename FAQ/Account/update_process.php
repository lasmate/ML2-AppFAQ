<?php
    // Start session
    session_start();
    echo "<pre>";
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app-faq_m2l";

    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    echo "2";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to sanitize inputs
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    echo "3";
    // Process form submission
    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $ligue = sanitize_input($_POST["ligue"]);
        $username = sanitize_input($_POST["username"]);
        $email = sanitize_input($_POST["email"]);
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
echo "4";
        
        // Initialize error array
        $errors = array();
        // Validate inputs
        if (empty($username)) {
        $errors[] = "Username is required";
        }
        if (empty($email)) {
        $errors[] = "Email is required";
        }
        if (empty($password)) {
        $errors[] = "Password is required";
        }
        if(empty($ligue)){
        $errors[] = "Ligue is required";
        }
        // Check if passwords match
        if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
        }
        
        // If no errors, proceed with user info update
        if (empty($errors)) {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    echo "5";      
        $id_usertype = 3; // Default user type 
        $id_ligue = $ligue; // Default ligue 
        
        // Insert user into database
        try {
        $stmt = $conn->prepare("UPDATE user SET pseudo = ?, mdp = ?, mail = ?, id_ligue = ? WHERE id_user = ?");
        echo "7";
        $stmt->bind_param("sssii", $username, $hashed_password, $email, $id_ligue, $_SESSION['id_user']);
        echo "6";
            } catch (Exception $e) {
                echo "Preparation failed: " . $e->getMessage();
            }
        
        if ($stmt->execute()) {
            // Registration successful
            $_SESSION["username"] = $username;
            $_SESSION["loggedin"] = true;
            echo "8";
            // Redirect to dashboard
            header("Location: ../../index.php");
            exit;
        } else {
            $errors[] = "Update failed: " . $stmt->error; // Use $stmt->error for more specific error message
        }
        }
        // If there are errors, store them and redirect back
        if (!empty($errors)) {
        $_SESSION["update_errors"] = $errors;
        header("Location: ../account/modification.php");
        exit;
        }
    } else {
        // Not a POST request
        header("Location: ../account/modification.php");
        exit;
    }

    } finally {
        $conn->close();
    }
