<?php
require 'db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO newsletter (email) VALUES (?)");
        $stmt->execute([$email]);
        echo json_encode(['status' => 'success', 'message' => 'Successfully subscribed!']);
    } catch(PDOException $e) {
        if ($e->errorInfo[1] == 1062) {
            echo json_encode(['status' => 'error', 'message' => 'Email already subscribed']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Subscription failed: ' . $e->getMessage()]);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>