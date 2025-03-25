<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
</head>
<body>
<div  class="magicpattern">
    <div class="flex-title"> FAQ Modification </div>
    <?php include "../components/navbar.php"; ?>
    <?php
        // Process the form data if it's submitted
        $question = '';
        $description = '';
        $reponse = '';
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['question'])) {
            $question = htmlspecialchars($_POST['question']);
            $reponse = htmlspecialchars($_POST['reponse']);
        }
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set the form values when page loads
        document.getElementById('question').value = "<?php echo $question; ?>";
        document.getElementById('reponse').value = "<?php echo $reponse; ?>";
    });
    
    </script>


    <div class="form-container">
        <?php $form_action = "/submit_question"; ?>
        <form action="<?php echo $form_action; ?>" method="post">
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required>

            <label for="reponse">reponse:</label>
            <textarea id="reponse" name="reponse" rows="4"></textarea>
            
            <button type="submit">Valider</button>
            <button type="button" onclick="document.getElementById('question').value=''; document.getElementById('description').value=''; document.getElementById('reponse').value='';">Supprimer</button>
        </form>
    </div>
    <?php include '../components/footer.php';?></div> 
</body>

</html>