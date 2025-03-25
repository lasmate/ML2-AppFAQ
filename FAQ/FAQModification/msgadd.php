<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once "../components/header.php"; ?>
<link rel="stylesheet" href="../../style/main.css">
<link rel="stylesheet" href="../../style/magicpatrnligue.css">
<link rel="stylesheet" href="../../style/account.css">

</head>
<body class="magicpattern">
    <div class="flex-title"> FAQ Basket </div>
    <?php include_once "../components/navbar.php"; ?>
    <div class="login-box">
        <form action="../components/new_question_process.php" method="post" enctype="multipart/form-data">
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required>

            <div class="button">
            <button type="submit">Submit</button></div>
        </form>
    </div>

    <?php include_once '../components/footer.php'; ?>
</body>
</html>