<!DOCTYPE html>
<html lang="en">
<head>
<?php include "components/header.php"; ?>
</head>
<body>
<div class='parent'><div class="magicpattern"/>
    <div class="flex-title"> <h1>FAQ Basket</h1> </div>
    <?php include "components/navbar.php"; ?>
    <div class="flex-page">
        <div class="flex-menu">
            <div class="select-sort"> trier</div> 
        </div>
        <div class="flex-content">
            <?php include "components/Qlist.php"; ?>
        </div>
    </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>