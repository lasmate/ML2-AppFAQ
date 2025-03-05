<!DOCTYPE html>
<html lang="en">
<head>
<?php include "components/header.php"; ?>
</head>
<body class="magicpattern">
    <div class="flex-title"> FAQ Handball </div>
    <?php include "components/navbar.php"; ?>
    <div class="flex-page"> 
    <div class="flex-menu"> trier
        <div class="flex-container">
            <span class="add-button" onclick="location.href='FAQModification/msgadd.php'"  ><span class="material-symbols-outlined">add</span></span>
        </div> 
    </div>
        <div class="flex-content">
            <?php include "components/Qlist.php"; ?>
        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>