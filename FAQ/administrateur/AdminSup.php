
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    session_start();
    const FAQ_ID = 4;
    //include "../components/session_handler.php";
    include "../components/header.php"; 
    include "../components/msglist.php";
    //checkUserSessionAccess(FAQ_ID);
    $faqdata = fetchFAQ(FAQ_ID);
    $userdata = fetchUsers();
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);
?>
</head>
<body>
<div class="magicpattern"/>
    <div class="flex-container">
        <?php include "../components/navbar.php"; ?>
    </div>
    <div class="flex-landing">
            <div class="flex-item" style="background-image: url('../../media/basket.jpg');" onclick="location.href='FAQ/FAQBask.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de basket</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/foot.jpeg');" onclick="location.href='FAQ/FAQFoot.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Foot</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/hand.jpg');" onclick="location.href='FAQ/FAQHand.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Handball</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/volley.jpg');" onclick="location.href='FAQ/FAQVolle.php'">
                <div style="height:100%;align-content: flex-end;">
                    <h2>Ligue de Volley</h2>
                </div>
            </div>
        </div>
        <div class="flex-landing">
            <div class="table-container">
                <h2>Gestion des utilisateurs</h2>
                <table class="user-table">
                    <tbody >
                        <?php foreach($userdata as $user): ?>
                        <tr>
                            <td><?= $user['id_user'] ?></td>
                            <td><?= $user['pseudo'] ?></td>
                            <td><?= $user['mail'] ?></td>
                            <td><?= $user['id_usertype'] ?></td>
                            <td>
                                <form method="post" action="promote_user.php">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="btn-promote">Promouvoir</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="demote_user.php">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="btn-demote">Rétrograder</button>
                                </form>
                            <td>
                                <form method="post" action="delete_user.php" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?');">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="btn-delete">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>
<?php include '../../FAQ/components/footer.php'; ?>   
</body>
</html>
