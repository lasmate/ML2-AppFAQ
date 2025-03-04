<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<link rel="stylesheet" href="../../style/account.css">

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
            
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php include 'components/footer.php';?></div> 
</body>
</html>