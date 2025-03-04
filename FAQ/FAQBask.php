<?php include "/opt/lampp/htdocs/Projects/ML2-AppFAQ/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "components/header.php"; ?>
</head>
<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title"> FAQ Basket </div>
    <?php include "components/navbar.php"; ?>
    <div class="flex-page">
        <div class="flex-menu"> trier
            <div class="flex-container">
                <span class="add-button"><a href="FAQModification/msgadd.php">poser question</a></span>
            </div> 
        </div>
        <div class="flex-content">
            <?php include "components/Qlist.php"; ?>
        </div>
    </div>
    
    <?php include 'components/footer.php';?></div>
</body>
</html>