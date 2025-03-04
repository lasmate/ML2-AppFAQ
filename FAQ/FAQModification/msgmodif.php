<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
</head>
<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title"> FAQ Basket </div>
    <?php include "../components/navbar.php"; ?>

    <?php
    // Process the form data if it's submitted
    $question = '';
    $details = '';
    $answer = '';
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['question'])) {
        $question = htmlspecialchars($_POST['question']);
        // You could also retrieve details and answer from a database based on the question
        // For example:
        // $details = getDetailsFromDatabase($question);
        // $answer = getAnswerFromDatabase($question);
    }
    ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set the form values when page loads
        document.getElementById('question').value = "<?php echo $question; ?>";
        document.getElementById('details').value = "<?php echo $details; ?>";
        document.getElementById('answer').value = "<?php echo $answer; ?>";
    });
    
    </script>
    <div class="form-container">
        <form action="/submit_question" method="post">
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required>
            
            <label for="details">Details:</label>
            <textarea id="details" name="details" rows="4" required></textarea>
            
            <label for="answer">Réponce</label>
            <textarea id="answer" name="answer" rows="4"></textarea>
            
            <button type="submit">Valider</button>
            <button type="button" onclick="document.getElementById('question').value=''; document.getElementById('details').value=''; document.getElementById('answer').value='';">Supprimer</button>
        </form>
    </div>
        </form>
    </div>
</body>
</html>