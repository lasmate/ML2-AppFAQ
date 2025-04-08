    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=add" />
    <?php 
    // Determine current file path for dynamic link generation
    $currentFile = basename($_SERVER['PHP_SELF']);

    // Generate links based on current file location
    switch ($currentFile) {
        case 'index.php':// Home page
            echo '<link rel="stylesheet" href="style/main.css">
            <link rel="stylesheet" href="style/magicpatrnhome.css">';
            include "FAQ/components/msglist.php";

            break;
        case in_array($currentFile, ['FAQBask.php', 'FAQFoot.php', 'FAQHand.php', 'FAQVolle.php']):// FAQ pages
            echo '<link rel="stylesheet" href="../style/main.css">
            <link rel="stylesheet" href="../style/magicpatrnligue.css">';
            include "components/msglist.php";
            break;
        case in_array($currentFile, ['inscription.php', 'connexion.php', 'deconnexion.php']):// Account pages
            echo '<link rel="stylesheet" href="../../style/main.css">
            <link rel="stylesheet" href="../../style/magicpatrnligue.css">';

            break;
        case in_array($currentFile, ['AdminBask.php', 'AdminFoot.php', 'AdminHand.php', 'AdminVolle.php', 'AdminSup.php']):// Admin pages
            echo '<link rel="stylesheet" href="../../style/main.css">
            <link rel="stylesheet" href="../../style/magicpatrnhome.css">';
            include "../components/msglist.php"; 
            break;
        case in_array($currentFile, ['msgadd.php', 'msgmod.php', 'msgdel.php']):// Message pages
            echo '<link rel="stylesheet" href="../../style/main.css">
            <link rel="stylesheet" href="../../style/magicpatrnligue.css">';
            include "../components/msglist.php"; 
            break;
        default:
            echo '<link rel="stylesheet" href="style/main.css">
            <link rel="stylesheet" href="style/magicpatrnligue.css">';
            include "FAQ/components/msglist.php"; 
            break;
    }
    ?>
    <title>Réponso'Ligue</title>