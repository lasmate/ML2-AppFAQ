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

// Fetch data from the database
$sql = "SELECT id_faq.faq, question.faq, reponce.faq, dat_question.faq, dat_reponce.faq, id_user.faq,id_user.user, id_ligue.user ,id_ligue.ligue FROM faq, user,ligue JOIN faq ON faq.id_user = user.id_user JOIN user ON user.id_ligue = ligue.id_ligue
WHERE id_ligue = $ligueselect ORDER BY dat_question DESC";
 
$result = $conn->query($sql);// Check if the query was executed
if ($result->num_rows > 0) { // Output data of each row
    while($row = $result->fetch_assoc()) {// while there is data in the database
        echo "<div class=\"question\">" ;
        echo "<p>". $row["question.faq"]."</p>" ;
        echo "<div class=\"reponce\" >" ;
        echo "<p>". $row["reponce.faq"]."</p></div></div>"; //
    }
} else {
    echo "0 results";
}

$conn->close();
?>