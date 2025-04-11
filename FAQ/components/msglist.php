<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app-faq_m2l";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/**
 * Function to fetch FAQ data by ID or all FAQs if no ID is provided
 * @param int|null $id_faq The ID of the FAQ to fetch (optional)
 */
function fetchFAQ($id_faq = null) {
    global $conn;
    if ($id_faq !== null) {
        $sql = "SELECT * FROM faq WHERE id_faq = " . intval($id_faq);
    } else {
        $sql = "SELECT * FROM faq";
    }
    $result = $conn->query($sql);
    $faqData = [];
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $faqData[] = $row;
            }
        }
    }
    return $faqData;
}
// Example usage:
$faqdata = fetchFAQ();       // Fetch all FAQs
//$faqdata = fetchFAQ(1);      // Fetch FAQ with id_faq = 1
// $faqdata = fetchFAQ(999);    // Fetch FAQ with id_faq = 999   

/**
 * Function to fetch user data by ID or all users if no ID is provided
 * @param int|null $id_user The ID of the user to fetch (optional)
 * @return array Array of user data
 */
function fetchUsers($id_user = null) {
    global $conn; 
    if ($id_user !== null) {
        $sql = "SELECT * FROM user WHERE id_user = " . intval($id_user);
    } else {
        $sql = "SELECT * FROM user";
    }
    $result = $conn->query($sql);
    $userData = [];
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $userData[] = $row;
            }
        }
    }
    return $userData;
}
// Example usage:
$userData = fetchUsers();      // Fetch all users
// $userData = fetchUsers(1);     // Fetch user with id_user = 1
// $userData = fetchUsers(999);   // Fetch user with id_user = 999

/**
 * Function to fetch ligue data by ID or all ligues if no ID is provided
 * @param int|null $id_ligue The ID of the ligue to fetch (optional)
 */
function fetchLigues($id_ligue = null) {
    global $conn;
    if ($id_ligue !== null) {
        $sql = "SELECT * FROM ligue WHERE id_ligue = " . intval($id_ligue);
    } else {
        $sql = "SELECT * FROM ligue";
    }
    $result = $conn->query($sql);
    $ligueData = [];
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ligueData[] = $row;
            }
        }
    } 
    return $ligueData;
}
// Example usage:
$ligueData = fetchLigues();      // Fetch all ligues
// $ligueData = fetchLigues(1);     // Fetch ligue with id_ligue = 1
// $ligueData = fetchLigues(999);   // Fetch ligue with id_ligue = 999



// Ensure that $faqdata is defined before applying the replacement
if (isset($faqdata)) {
    // Apply the replacement
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userData);
    // Display the modified FAQ data
//     echo "<h3>FAQ data with user pseudos:</h3>";
//     displayArrayPlaintext($faqdata);
// } else {
//     echo "<p>No FAQ data available to modify.</p>";
}


/**
 * fetchs a message by ID
 * @param int $id The ID of the message to fetch
 * @return array The message data
 * 
 */
function fetchMessage($id) {
    global $conn;
    $sql = "SELECT * FROM faq WHERE id_Q = " . intval($id);
    $result = $conn->query($sql);
    $messageData = [];
    if ($result) {
        if ($result->num_rows > 0) {
            $messageData = $result->fetch_assoc();
        }
    }
    return $messageData;
 }

/**
 * function to add a new message
 * @param string $question The question to add
 * @param int $id_user The ID of the user who asked the question
 * @param int $id_FAQ The ID of the FAQ the question belongs to
 * @return bool True if the message was added successfully, false otherwise
 */
function addMessage($question, $id_user, $id_FAQ) {
    global $conn;
    $sql = "INSERT INTO faq (question, id_user, id_FAQ) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $question, $id_user, $id_FAQ);
    $result = $stmt->execute();
    return $result;
}

/**
 * function to delete a message
 * @param int $id_Q The ID of the message to delete
 * @return bool True if the message was deleted successfully, false otherwise
 */
function delMessage($id_Q) {
    global $conn;
    $sql = "DELETE FROM faq WHERE id_Q = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_Q);
    $result = $stmt->execute();
    return $result;
}

/**
 * function to modify a message
 * @param int $id_Q The ID of the message to modify
 * @param string $question The new question
 * @param string $mots_cles The new keywords
 * @return bool True if the message was modified successfully, false otherwise
 */
function modMessage($id_Q, $question,$reponse, $mots_cles) {
    global $conn;
    $sql = "UPDATE faq SET question = ?,reponse=?, mots_cles = ? WHERE id_Q = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $question,$reponse,$mots_cles,$id_Q);
    $result = $stmt->execute();
    return $result;
}

/**
 * function to answer a message
 * @param int $id_Q The ID of the message to answer
 * @param string $reponse The answer to the message
 * @return bool True if the answer was added successfully, false otherwise
 */
function ansMessage($id_Q, $reponse,) {//todo update to add the id of the user answering
    global $conn;
    $sql = "UPDATE faq SET reponse = ? WHERE id_Q = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $reponse, $id_Q);
    $result = $stmt->execute();
    return $result;
}

/**
 * fonction de validation de message
 * @param int $id_Q  est l'id du message à valider
 * @return bool true si la validation a réussi, false sinon
 */
function valMessage($id_Q){
    global $conn;
    $sql = "UPDATE faq SET valider = 1 WHERE id_Q = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_Q);
    $result = $stmt->execute();
    return $result;
}

/*
 * function to delete a user
 * @param int $id_user The ID of the user to delete
 * @return bool True if the user was deleted successfully, false otherwise
 */
function delUser($id_user) {
    global $conn;
    $sql = "DELETE FROM user WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_user);
    $result = $stmt->execute();
    return $result;
}


/**
 * function to mod an user
 * @param int $id_user The ID of the user to modify
 * @return bool True if the user was modified successfully, false otherwise
 */
function modUser($id_user) {// usertype checking
    global $conn;
    // if (usertype($id_user) == 2) {
    //     $id_usertype = 1; // Assuming 1 is the ID for the user type you want to set
    // } else {
    //     $id_usertype = 2; // Assuming 2 is the ID for the user type you want to set
    // }
    $id_usertype = 2; // Assuming 2 is the ID for the user type you want to set
    $sql = "UPDATE user SET id_usertype = ? WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $id_usertype, $id_user);
    $result = $stmt->execute();
    return $result;
}

/**
 * function to demod an user
 * @param int $id_user The ID of the user to demod
 * @return bool True if the user was demod successfully, false otherwise
 */
function demodUser($id_user) {
    global $conn;
    $id_usertype = 3; // Assuming 1 is the ID for the user type you want to set
    $sql = "UPDATE user SET id_usertype = ? WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $id_usertype, $id_user);
    $result = $stmt->execute();
    return $result;
}

/**
 * Replace id_user with user pseudo in FAQ data
 * @param array $faqData Array of FAQ records
 * @param array $userData Array of user records
 * @return array Modified FAQ data
 */
function replaceFaqUserIdWithPseudo($faqData, $userData) {
    // Create a lookup array for quick access to user pseudos
    $userLookup = [];//
    foreach ($userData as $user) {
        $userLookup[$user['id_user']] = $user['pseudo'];

    }
    // Replace id_user with pseudo for each FAQ record
    foreach ($faqData as &$faq) {
        if (isset($faq['id_user']) && isset($userLookup[$faq['id_user']])) {
            $faq['id_user'] = $userLookup[$faq['id_user']];
        }
        if (isset($faq['id_user_R']) && isset($userLookup[$faq['id_user_R']])) {
            $faq['id_user_R'] = $userLookup[$faq['id_user_R']];
        }
    } 
    return $faqData;
}

/**
 * Function to display FAQ data as plaintext
 * @param array $faqData The FAQ data array to display
 */
function displayArrayPlaintext($faqData = []) { 
    
    if (!empty($faqData)) {
        echo "<pre>";
        print_r($faqData);
        echo "</pre>";
    } else {
        echo "<p>No FAQ records found.</p>";
    }
}

//  // Display the FAQ data as plaintext
//  displayArrayPlaintext($faqdata);
//  // Display the user data as plaintext
//  displayArrayPlaintext($userData);
//  // Display the ligue data as plaintext
//  displayArrayPlaintext($ligueData);


?>