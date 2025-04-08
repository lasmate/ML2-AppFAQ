<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    session_start();
    const FAQ_ID = null; 
    include "../components/session_handler.php";
    include "../components/header.php"; 
    checkUserSessionAccess(FAQ_ID);
    $faqdata = fetchFAQ(FAQ_ID);
    $userdata = fetchUsers();
    $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);

    // Handle form submissions directly on this page
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['action']) && isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            switch ($_POST['action']) {
                case 'promote':
                    modUser($user_id);
                    break;
                case 'demote':
                    demodUser($user_id);
                    break;
                case 'delete':
                    if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] === 'yes') {
                        delUser($user_id);
                    }
                    break;
            }
            // Refresh user data after action
            $userdata = fetchUsers();
        }
    }
?>
</head>
<body class="magicpattern">
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
                                <form method="post">
                                    <input type="hidden" name="user_id" value="<?= $user['id_user'] ?>">
                                    <input type="hidden" name="action" value="promote">
                                    <button type="submit" class="btn-promote">Promouvoir</button>
                                </form>
                            </td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="user_id" value="<?= $user['id_user'] ?>">
                                    <input type="hidden" name="action" value="demote">
                                    <button type="submit" class="btn-demote">Rétrograder</button>
                                </form>
                            <td>
                                <form method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?');">
                                    <input type="hidden" name="user_id" value="<?= $user['id_user'] ?>">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="confirm_delete" value="yes">
                                    <button type="submit" class="btn-delete">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

<?php include '../../FAQ/components/footer.php'; ?>   
</body>
</html>
