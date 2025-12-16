<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    include "../components/session_handler.php"; 
    include "../components/header.php";
    $userdata = fetchUserbyId($_SESSION['id_user']);
    echo '<script>console.log('.json_encode($userdata).')</script>';
?>
</head>
<body class="magicpattern">
<div class="flex-title">mettre a jour le compte</div>
<?php require_once '../components/navbar.php'; ?>
    <div class="flex-page">
    <div class="login-box">
        <?php
            $user = [];
            if (is_array($userdata)) {
                if (isset($userdata[0]) && is_array($userdata[0])) {//si l'array est remplo et existe
                    $user = $userdata[0];
                } else {
                    $user = $userdata;
                }
            }
        ?>
        <form action="update_process.php" method="post">
            <input type="hidden" name="id_user" value="<?php echo isset($userdata['id_user']) ? (int)$user['id_user'] : (int)($_SESSION['id_user'] ?? 0); ?>"> 
            <p>Sport (sélectionner en 1)</p>
            <div class="radio-group" >
                <div class="radio-option" >
                    <input type="radio" id="football" name="ligue" value="1" required <?php if($userdata['id_ligue'] == 1) echo 'checked'; ?> >
                    <label for="football">Football</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="basket" name="ligue" value="2" <?php if($userdata['id_ligue'] == 2) echo 'checked'; ?> >
                    <label for="basket">Basket</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="volleyball" name="ligue" value="3" <?php if($userdata['id_ligue'] == 3) echo 'checked'; ?> >
                    <label for="volleyball">Volleyball</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="handball" name="ligue" value="4" <?php if($userdata['id_ligue'] == 4) echo 'checked'; ?> >
                    <label for="handball">Handball</label>
                </div>
            </div>
        <div class="margin-separator"></div>
        <div class="textbox">
            <label for="username">Pseudo:</label>
            <input type="text" id="username" name="username" required value="<?php echo htmlspecialchars($user['pseudo'], ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="textbox">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($user['mail'], ENT_QUOTES, 'UTF-8'); ?>">
        </div> 
        <div class="textbox">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="textbox">
            <label for="confirm_password">Confirmer le mot de passe:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="button">
            <button type="submit">Mettre à jour</button>
        </div>
        </form>

    </div>
</body>
</html>