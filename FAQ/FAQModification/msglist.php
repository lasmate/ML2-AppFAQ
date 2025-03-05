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
// Fetch all records from faq table
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

    // Check if query was successful
    if ($result) {
        echo "<h2>FAQ Data</h2>";
        
        if ($result->num_rows > 0) {
            echo "<table border='1' cellpadding='5'>";
            
            // Table headers
            echo "<tr>";
            $fields = $result->fetch_fields();
            foreach ($fields as $field) {
                echo "<th>" . htmlspecialchars($field->name) . "</th>";
            }
            echo "</tr>";
            
            // Table data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No FAQ records found.</p>";
        }
    } else {
        echo "<p style='color: red;'>Error fetching FAQ data: " . $conn->error . "</p>";
    }
}

// Example usage:
fetchFAQ();       // Fetch all FAQs
fetchFAQ(1);      // Fetch FAQ with id_faq = 1
fetchFAQ(999);    // Fetch FAQ with id_faq = 999   

/**
 * Function to fetch user data by ID or all users if no ID is provided
 * @param int|null $id_user The ID of the user to fetch (optional)
 */
function fetchUsers($id_user = null) {
    global $conn;
    
    if ($id_user !== null) {
        $sql = "SELECT * FROM user WHERE id_user = " . intval($id_user);
    } else {
        $sql = "SELECT * FROM user";
    }
    $result = $conn->query($sql);

    // Check if query was successful
    if ($result) {
        echo "<h2>User Data</h2>";
        
        if ($result->num_rows > 0) {
            echo "<table border='1' cellpadding='5'>";
            
            // Table headers
            echo "<tr>";
            $fields = $result->fetch_fields();
            foreach ($fields as $field) {
                echo "<th>" . htmlspecialchars($field->name) . "</th>";
            }
            echo "</tr>";
            
            // Table data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No user records found.</p>";
        }
    } else {
        echo "<p style='color: red;'>Error fetching user data: " . $conn->error . "</p>";
    }
}

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

    // Check if query was successful
    if ($result) {
        echo "<h2>Ligue Data</h2>";
        
        if ($result->num_rows > 0) {
            echo "<table border='1' cellpadding='5'>";
            
            // Table headers
            echo "<tr>";
            $fields = $result->fetch_fields();
            foreach ($fields as $field) {
                echo "<th>" . htmlspecialchars($field->name) . "</th>";
            }
            echo "</tr>";
            
            // Table data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No ligue records found.</p>";
        }
    } else {
        echo "<p style='color: red;'>Error fetching ligue data: " . $conn->error . "</p>";
    }
}

// Example usage:
fetchUsers();      // Fetch all users
fetchLigues();     // Fetch all ligues
?>