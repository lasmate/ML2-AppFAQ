<!DOCTYPE html>
<html lang="en">
<head>
<?php include "components/header.php"; ?>
</head>
<body>
    <div class="flex-title"> <h1>FAQ Basket</h1> </div>
    <?php include "components/navbar.php"; ?>
    <div class="flex-page">
        <div class="flex-menu">
            <div class="select-sort"> trier</div> 
        </div>
        <div class="flex-content">
                <div class="flex-question">
                    <?php
                        $questions = array("Question 1", "Question 2", "Question 3", "Question 4", "Question 5", "Question 6", "Question 7");
                        $reponses = array("Reponse 1", "Reponse 2", "Reponse 3", "Reponse 4", "Reponse 5", "Reponse 6", "Reponse 7");
                        for ($i = 0; $i < count($questions); $i++) {
                            echo "<h2>".$questions[$i]."</h2>";
                            echo "<p>".$reponses[$i]."</p>";
                        }
                        ?>
                

        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>