<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ML2 FAQ Ajout</title>
    <link rel="stylesheet" href="../../style/main.css">
</head>
<body>
    <div class="flex-title"> <h1>FAQ Sport1</h1> </div>
    <div class="flex-container">
        <div class="flex-nav"> <a href="index.php">Acceuil</a></div>
        <div class="flex-nav" id="FAQ"><p> FAQ </p>
            <div class="flex-nav-Column"> <a href="../../FAQ/FAQSport1.php">Sport1</a></div>
            <div class="flex-nav-Column"> <a href="../../FAQ/FAQSport2.php">Sport2</a></div>
            <div class="flex-nav-Column"> <a href="../../FAQ/FAQSport3.php">Sport3</a></div>
            <div class="flex-nav-Column"> <a href="../../FAQ/FAQSport4.php">Sport4</a></div>
    </div>
    <div class="flex-nav" id="Account"><p> Compte </p> 
            <div class="flex-nav-Column"> <a href="../../Account/inscription.php">Inscription</a></div>
            <div class="flex-nav-Column"> <a href="../../Account/connection.php">Connection</a></div>
            <div class="flex-nav-Column"> <a href="../../Account/deconnection.php">Deconnection</a></div>
    </div>
</div>

    <div class="form-container">
        <form action="/submit_question" method="post">
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required>
            
            <label for="details">Details:</label>
            <textarea id="details" name="details" rows="4" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>