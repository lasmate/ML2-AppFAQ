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
// $faqdata = fetchFAQ(1);      // Fetch FAQ with id_faq = 1
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



/**
 * Replace id_user with user pseudo in FAQ data
 * @param array $faqData Array of FAQ records
 * @param array $userData Array of user records
 * @return array Modified FAQ data
 */
function replaceFaqUserIdWithPseudo($faqData, $userData) {
    // Create a lookup array for quick access to user pseudos
    $userLookup = [];
    foreach ($userData as $user) {
        $userLookup[$user['id_user']] = $user['pseudo'];
    }
    
    // Replace id_user with pseudo for each FAQ record
    foreach ($faqData as &$faq) {
        if (isset($faq['id_user']) && isset($userLookup[$faq['id_user']])) {
            $faq['id_user'] = $userLookup[$faq['id_user']];
        }
    }
    
    return $faqData;
}
// Display the FAQ data as plaintext
displayArrayPlaintext($faqdata);
// Display the user data as plaintext
displayArrayPlaintext($userData);
// Display the ligue data as plaintext
displayArrayPlaintext($ligueData);

// Ensure that $faqdata is defined before applying the replacement
if (isset($faqdata)) {
    // Apply the replacement
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userData);

    // Display the modified FAQ data
    echo "<h3>FAQ data with user pseudos:</h3>";
    displayArrayPlaintext($faqdata);
} else {
    echo "<p>No FAQ data available to modify.</p>";
}


// Close the connection
$conn->close();
?>