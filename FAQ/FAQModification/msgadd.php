<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    session_start();
    
    include "../components/header.php";
    include "../components/msglist.php"; 
    ?>
</head>
<body class="magicpattern">
    <div class="flex-title"> FAQ Basket </div>
    <?php include_once "../components/navbar.php"; ?>
    <div class="login-box">
        <?php
        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $question = htmlspecialchars($_POST["question"], ENT_QUOTES, 'UTF-8');
            if (!empty($question)) {
                // Call the addMessage function from msglist.php
                if (isset($_SESSION["id_user"]) && isset($_SESSION["id_ligue"])) {
                    if (function_exists('addMessage')) {
                        addMessage($question, $_SESSION["id_user"], $_SESSION["id_ligue"]);
                    } else {
                        echo "<p>Error: addMessage function is not defined.</p>";
                    }
                    echo "<p>Question added successfully!</p>";
                } else {
                    echo "<p>Error: User or league ID is not set.</p>";
                }
            }
        }
        ?>
        <form method="post">
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required>
            <input type="hidden" name="id_ligue" value="<?php echo $_SESSION["id_ligue"]; ?>">
            <input type="hidden" name="id_user" value="<?php echo $_SESSION["id_user"]; ?>">
            <div class="button">
            <button type="submit">Submit</button></div>
        </form>
    </div>

    <?php include_once '../components/footer.php'; ?>
</body>
</html>