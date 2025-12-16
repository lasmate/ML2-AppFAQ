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
        // User management actions (promote/demote/delete)
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
        }

        // Question management actions (validate)
        if (isset($_POST['action']) && isset($_POST['question_id'])) {
            $q_id = intval($_POST['question_id']);
            if ($_POST['action'] === 'validate') {
                // mark message as validated
                valMessage($q_id);
            }
        }

        // Refresh data after actions
        $userdata = fetchUsers();
        $faqdata = fetchFAQ(FAQ_ID);
        $faqdata = replaceFaqUserIdWithPseudo($faqdata, $userdata);
    }
?>
</head>
<body class="magicpattern">
    <div class="flex-container">
        <?php include "../components/navbar.php"; ?>
    </div>
    <div class="flex-landing">
            <div class="flex-item" style="background-image: url('../../media/basket.jpg');height:80%;" onclick="location.href='../FAQBask.php'">
                <div style="height:80%;align-content: flex-end;">
                    <h2>Ligue de basket</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/foot.jpeg');height:80%;" onclick="location.href='../FAQFoot.php'">
                <div style="height:80%;align-content: flex-end;">
                    <h2>Ligue de Foot</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/hand.jpg');height:80%;" onclick="location.href='../FAQHand.php'">
                <div style="height:80%;align-content: flex-end;">
                    <h2>Ligue de Handball</h2>
                </div>
            </div>
            <div class="flex-item" style="background-image: url('../../media/volley.jpg');height:80%;" onclick="location.href='../FAQVolle.php'">
                <div style="height:80%;align-content: flex-end;">
                    <h2>Ligue de Volley</h2>
                </div>
            </div>
        </div>
        <div class="flex-landing">
            <div style="display:flex; gap:24px; align-items:flex-start;">
                <div class="table-container" style="flex:1;">
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
                <div class="table-container" style="flex:1;">
                    <h2>Questions non validées</h2>
                    <table class="user-table">
                        <thead>
                            <tr><th>ID</th><th>Question</th><th>Auteur</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($faqdata as $q): 
                            // Show only non-validated questions. Compare against numeric 0 or string '0'.
                            if ($q['Valider'] === 0 || $q['Valider'] === '0') {
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($q['id_Q']) ?></td>
                                <td style="text-align:left; max-width:400px;"><?= htmlspecialchars($q['question']) ?></td>
                                <td><?= htmlspecialchars($q['id_user']) ?></td>
                                <td>
                                    <form method="post" style="display:inline">
                                        <input type="hidden" name="question_id" value="<?= intval($q['id_Q']) ?>">
                                        <input type="hidden" name="action" value="validate">
                                        <button type="submit" class="btn-promote">Valider</button>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php include '../../FAQ/components/footer.php'; ?>   
</body>
</html>
