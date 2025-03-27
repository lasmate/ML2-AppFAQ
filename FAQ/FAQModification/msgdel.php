<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "../components/header.php"; 
require_once '../components/msglist.php';
$id_Q = isset($_GET['id']) ? $_GET['id'] : null;
$msgdata = fetchMessage($id_Q);
?>

</head>

<body class="magicpattern">
    <div class="flex-title"> FAQ Basket </div>
    <?php include_once "../components/navbar.php"; ?>

    <div class="login-box">
        <?php
        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['delete'])) {
                if ($_POST['delete'] === 'yes') {
                    // Call the deleteMessage function from msglist.php
                    if (function_exists('delMessage')) {
                        deleteMessage($id_Q);
                    } else {
                        echo "<p>Error: deleteMessage function is not defined.</p>";
                    }
                    echo "<p>Message deleted successfully!</p>";
                } else {
                    echo "<p>Message deletion cancelled.</p>";
                }
            }
        }
        ?>
        <div class="delete-box">
            <h2>Delete Message</h2>
                <p class="delete-message">Are you sure you want to delete message:</p>
                <p class="delete-message"><?php echo $msgdata['question']; ?></p>
                <form method="post">
                    <div class="button-group">
                        <button type="submit" name="delete" value="yes" class="button-add" style="background-color:red" >Yes, Delete</button>
                        <button type="submit" name="delete" value="no" class="button-add">No, Cancel</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../components/footer.php'; ?>
</body>
</html>