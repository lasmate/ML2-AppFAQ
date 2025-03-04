<?php include "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
</head>
<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title"> FAQ Basket </div>
    <?php include "../components/navbar.php"; ?>


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