<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">

<style>
        .form-container {
            background-color: rgba(255, 255, 255, 0.6);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 10px;
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
<div  class="magicpattern">
    <div class="flex-title"> FAQ Modification </div>
    <?php include "../components/navbarbis.php"; ?>
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