<?php
    // Start session
    session_start();

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app-faq_m2l";

    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

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

    // Process form submission
    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $ligue = sanitize_input($_POST["ligue"]);
        $username = sanitize_input($_POST["username"]);
        $email = sanitize_input($_POST["email"]);
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        
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
        
        // Check if username already exists
        $stmt = $conn->prepare("SELECT 1 FROM user WHERE pseudo = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
        $errors[] = "Username already exists";
        }
        // If no errors, proceed with registration
        if (empty($errors)) {
        // Hash password
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $id_usertype = 1; // Default user type 
        $id_ligue = $ligue; // Default ligue 
        
        // Insert user into database
        $stmt = $conn->prepare("INSERT INTO user (pseudo, mdp, mail, id_usertype, id_ligue) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $username, $password, $email, $id_usertype, $id_ligue);
        
        if ($stmt->execute()) {
            // Registration successful
            $_SESSION["username"] = $username;
            $_SESSION["loggedin"] = true;
            
            // Redirect to dashboard
            header("Location: ../../index.php");
            exit;
        } else {
            $errors[] = "Registration failed: " . $stmt->error; // Use $stmt->error for more specific error message
        }
        }
        // If there are errors, store them and redirect back
        if (!empty($errors)) {
        $_SESSION["register_errors"] = $errors;
        header("Location: ../account/inscription.php");
        exit;
        }
    } else {
        // Not a POST request
        header("Location: ../account/inscription.php");
        exit;
    }

    } finally {
        $conn->close();
    }




