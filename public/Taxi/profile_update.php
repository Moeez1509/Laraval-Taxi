<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . '/config/connect.php';

if (!isset($_SESSION['uid'])) {
  header('Location: login.php');
  exit;
}

if (!isset($_POST['update_profile'])) {
  header('Location: profile.php');
  exit;
}

$uid = (int) $_SESSION['uid'];

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$password = trim($_POST['password'] ?? '');

$updates = [];
$params = [];
$types = '';

if ($name !== '') {
  $updates[] = "name = ?";
  $params[] = $name;
  $types .= 's';
  $_SESSION['name'] = $name;
}

if ($email !== '') {
  $updates[] = "email = ?";
  $params[] = $email;
  $types .= 's';
}

if ($phone !== '') {
  $updates[] = "phone = ?";
  $params[] = $phone;
  $types .= 's';
}

if ($password !== '') {
  $updates[] = "password = ?";
  $params[] = $password;
  $types .= 's';
}

// Handle profile image upload (stored under assets/img/profile-images/)
if (isset($_FILES['profile_pic']) && is_array($_FILES['profile_pic']) && ($_FILES['profile_pic']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE) {
  if ($_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
    $tmpPath = $_FILES['profile_pic']['tmp_name'];
    $originalName = $_FILES['profile_pic']['name'] ?? '';

    $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'webp'];

    if (in_array($ext, $allowed, true)) {
      $targetDir = __DIR__ . '/assets/img/profile-images';
      if (!is_dir($targetDir)) {
        @mkdir($targetDir, 0775, true);
      }

      $fileName = 'user_' . $uid . '_' . time() . '.' . $ext;
      $targetPath = $targetDir . '/' . $fileName;

      if (move_uploaded_file($tmpPath, $targetPath)) {
        $relativePath = 'assets/img/profile-images/' . $fileName;
        $updates[] = "profile_image = ?";
        $params[] = $relativePath;
        $types .= 's';
      }
    }
  }
}

if (!$updates) {
  header('Location: profile.php');
  exit;
}

$sql = "UPDATE users SET " . implode(', ', $updates) . " WHERE id = ? LIMIT 1";
$stmt = mysqli_prepare($con, $sql);
if (!$stmt) {
  header('Location: profile.php');
  exit;
}

$types .= 'i';
$params[] = $uid;

mysqli_stmt_bind_param($stmt, $types, ...$params);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header('Location: profile.php');
exit;

