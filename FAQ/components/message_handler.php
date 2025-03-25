<?php
/**
 * Message Handler Functions
 * Handles message operations: add, modify, delete, and answering messages
 */
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app-faq_m2l";
/**
 * Add a new message
 * 
 * @param PDO $db Database connection
 * @param string $question Question content
 * @param int $userId ID of the user creating the message
 * @param int $faqId FAQ ID (optional)
 * @return int|bool ID of the inserted message or false on failure
 */
function addMessage($db, $question, $userId, $faqId = null) {
    try {
        $query = "INSERT INTO messages (id_FAQ, question, dat_question, id_user) 
                 VALUES (:id_FAQ, :question, NOW(), :id_user)";
        
        $stmt = $db->prepare($query);
        $stmt->bindParam(':question', $question, PDO::PARAM_STR);
        $stmt->bindParam(':id_user', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':id_FAQ', $faqId, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            return $db->lastInsertId();
        }
        return false;
    } catch (PDOException $e) {
        // Log error
        error_log("Failed to add message: " . $e->getMessage());
        return false;
    }
}

/**
 * Modify an existing message
 * 
 * @param PDO $db Database connection
 * @param int $messageId ID of the message to modify
 * @param string $question Updated question
 * @param int $faqId Updated FAQ ID (optional)
 * @return bool Success status
 */
function modifyMessage($db, $messageId, $question, $faqId = null) {
    try {
        $query = "UPDATE messages 
                 SET question = :question, 
                     id_FAQ = :id_FAQ
                 WHERE id_Q = :message_id";
        
        $stmt = $db->prepare($query);
        $stmt->bindParam(':question', $question, PDO::PARAM_STR);
        $stmt->bindParam(':id_FAQ', $faqId, PDO::PARAM_INT);
        $stmt->bindParam(':message_id', $messageId, PDO::PARAM_INT);
        
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Failed to modify message: " . $e->getMessage());
        return false;
    }
}

/**
 * Delete a message
 * 
 * @param PDO $db Database connection
 * @param int $messageId ID of the message to delete
 * @return bool Success status
 */
function deleteMessage($db, $messageId) {
    try {
        $query = "DELETE FROM messages WHERE id_Q = :message_id";
        
        $stmt = $db->prepare($query);
        $stmt->bindParam(':message_id', $messageId, PDO::PARAM_INT);
        
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Failed to delete message: " . $e->getMessage());
        return false;
    }
}

/**
 * Answer a message
 * 
 * @param PDO $db Database connection
 * @param int $messageId ID of the message being answered
 * @param string $response Content of the answer
 * @return bool Success status
 */
function answerMessage($db, $messageId, $response) {
    try {
        $query = "UPDATE messages 
                 SET reponse = :response, 
                     dat_reponse = NOW()
                 WHERE id_Q = :message_id";
        
        $stmt = $db->prepare($query);
        $stmt->bindParam(':response', $response, PDO::PARAM_STR);
        $stmt->bindParam(':message_id', $messageId, PDO::PARAM_INT);
        
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Failed to answer message: " . $e->getMessage());
        return false;
    }
}

/**
 * Get a message
 * 
 * @param PDO $db Database connection
 * @param int $messageId Message ID
 * @return array|bool Message data or false on failure
 */
function getMessage($db, $messageId) {
    try {
        $query = "SELECT * FROM messages WHERE id_Q = :message_id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':message_id', $messageId, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Failed to retrieve message: " . $e->getMessage());
        return false;
    }
}
?>
