<?php
require 'db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $amount = filter_var($data['amount'], FILTER_VALIDATE_FLOAT);
    $name = filter_var($data['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);

    if (!$amount || $amount < 100) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid amount']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO donations (amount, donor_name, donor_email) VALUES (?, ?, ?)");
        $stmt->execute([$amount, $name, $email]);
        
        echo json_encode([
            'status' => 'success',
            'message' => 'Donation recorded successfully',
            'donation_id' => $pdo->lastInsertId()
        ]);
    } catch(PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Donation failed: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>