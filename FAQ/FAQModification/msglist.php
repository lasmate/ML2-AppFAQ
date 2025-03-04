<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app-faq_ML2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define and sanitize $ligueselect
$ligueselect = isset($_GET['ligueselect']) ? intval($_GET['ligueselect']) : 0;

// Fetch data from the database
$sql = "SELECT f.id_faq, f.question AS question_faq, f.reponce AS reponce_faq, f.dat_question, f.dat_reponce, f.id_user AS faq_user_id, u.id_user AS user_id, u.id_ligue AS user_ligue_id, l.id_ligue, l.ligue 
FROM faq f 
JOIN user u ON f.id_user = u.id_user 
JOIN ligue l ON u.id_ligue = l.id_ligue 
WHERE l.id_ligue = $ligueselect 
ORDER BY f.dat_question DESC";
$result = $conn->query($sql);
// Check if the query was executed successfully
if ($result === false) {
    die("Error executing query: " . $conn->error);
}
 
        echo "<p>". $row["reponce"]."</p></div></div>"; //
if ($result->num_rows > 0) { // Output data of each row
        echo "<p>". $row["question"]."</p>" ;
        echo "<div class=\"reponce\" >" ;
        echo "<p>". $row["reponce"]."</p></div></div>"; //
        echo "<div class=\"reponce\" >" ;
        echo "<p>". $row["reponce_faq"]."</p></div></div>"; //
    }
 else {
    echo "0 results";
}
    echo "No results found.";
$conn->close();
?>