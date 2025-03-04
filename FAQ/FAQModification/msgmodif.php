<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<style>
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .form-container input, 
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #000;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .form-container button {
            padding: 10px 15px;
            background-color: #888;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        
        .form-container button:hover {
            background-color: #666;
        }
        
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
</style>
</head>
<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title"> FAQ Basket </div>
    <?php include "../components/navbar.php"; ?>
    <?php
    // Process the form data if it's submitted
    $question = '';
    $description = '';
    $answer = '';
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['question'])) {
        $question = htmlspecialchars($_POST['question']);
        $description = htmlspecialchars($_POST['description']);
        $answer = htmlspecialchars($_POST['answer']);
    }
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set the form values when page loads
        document.getElementById('question').value = "<?php echo $question; ?>";
        document.getElementById('description').value = "<?php echo $description; ?>";
        document.getElementById('answer').value = "<?php echo $answer; ?>";
    });
    
    </script>


    <div class="form-container">
        <form action="/submit_question" method="post">
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required>
            
            <label for="description">Details:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            
            <label for="answer">Réponce</label>
            <textarea id="answer" name="answer" rows="4"></textarea>
            
            <button type="submit">Valider</button>
            <button type="button" onclick="document.getElementById('question').value=''; document.getElementById('details').value=''; document.getElementById('answer').value='';">Supprimer</button>
        </form>
    </div>
    <?php include '../components/footer.php';?></div> 
</body>

</html>