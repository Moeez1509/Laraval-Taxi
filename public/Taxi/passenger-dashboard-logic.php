<?php
session_start();

require_once __DIR__ . '/config/connect.php';
require_once __DIR__ . '/config/constant.php';

// Only allow valid request
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['continue_booking'])) {
    header('Location: ' . ROOT_URL . 'passenger-dashboard.php');
    exit;
}

$errors = [];

// Auth check
$uid = $_SESSION['uid'] ?? null;
if (!$uid) {
    $errors['auth'] = 'Please login to continue.';
}

// Sanitize inputs
$request_type = $_POST['request_type'] ?? 'ride';
$request_type = in_array($request_type, ['ride', 'delivery']) ? $request_type : 'ride';

$pickup  = trim($_POST['pickup_address'] ?? '');
$dropoff = trim($_POST['dropoff_address'] ?? '');

$pickup_lat  = trim($_POST['pickup_lat'] ?? '');
$pickup_lng  = trim($_POST['pickup_lng'] ?? '');
$dropoff_lat = trim($_POST['dropoff_lat'] ?? '');
$dropoff_lng = trim($_POST['dropoff_lng'] ?? '');

$schedule_pickup_time = trim($_POST['schedule_pickup_time'] ?? '');

$dropoff_name  = trim($_POST['dropoff_name'] ?? '');
$dropoff_phone = trim($_POST['dropoff_phone'] ?? '');
// Service Type
$service_type = trim((string) ($_POST['service_type'] ?? ''));

$allowedServices = [
    'economy',
    'sharing_ride',
    'rickshaw',
    'taxi_1_4'
];

if ($service_type === '') {
    $errors['service_type'] = 'Please select a service type.';
} elseif (!in_array($service_type, $allowedServices, true)) {
    $errors['service_type'] = 'Invalid service selected.';
}

// Session old data me save karo
$_SESSION['pdash_data']['service_type'] = $service_type;


$termsAccepted = isset($_POST['terms']) && $_POST['terms'] === '1';

// Validation
if ($pickup === '') {
    $errors['pickup_address'] = 'Pickup location is required.';
}
if ($dropoff === '') {
    $errors['dropoff_address'] = 'Dropoff location is required.';
}
if ($pickup && (!$pickup_lat || !$pickup_lng)) {
    $errors['pickup_address'] = 'Select pickup from map.';
}
if ($dropoff && (!$dropoff_lat || !$dropoff_lng)) {
    $errors['dropoff_address'] = 'Select dropoff from map.';
}
if ($schedule_pickup_time === '') {
    $errors['schedule_pickup_time'] = 'Pickup time is required.';
}
if (!$termsAccepted) {
    $errors['terms'] = 'Please accept terms.';
}

// Save old data
$_SESSION['pdash_data'] = $_POST;

if (!empty($errors)) {
    $_SESSION['pdash_errors'] = $errors;
    header('Location: ' . ROOT_URL . 'passenger-dashboard.php');
    exit;
}

// Get user info
$stmt = mysqli_prepare($con, "SELECT name, email, phone FROM users WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $uid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

$name  = $user['name'] ?? '';
$email = $user['email'] ?? '';
$phone = $user['phone'] ?? '';

// Insert booking
$sql = "INSERT INTO booking_requests 
(user_id, name, request_type, email, phone, dropoff_name, dropoff_phone, pickup_address, service_type, dropoff_address, schedule_pickup_time, pickup_lat, pickup_lng, dropoff_lat, dropoff_lng, status)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);

$status = 'pending';

mysqli_stmt_bind_param(
    $stmt,
    "isssssssssddddss",
    $uid,
    $name,
    $request_type,
    $email,
    $phone,
    $dropoff_name,
    $dropoff_phone,
    $pickup,
    $service_type,
    $dropoff,
    $schedule_pickup_time,
    $pickup_lat,
    $pickup_lng,
    $dropoff_lat,
    $dropoff_lng,
    $status
);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['pdash_success'] = "Booking successful!";
    unset($_SESSION['pdash_data'], $_SESSION['pdash_errors']);
} else {
    $_SESSION['pdash_errors'] = ['db' => 'Database error: ' . mysqli_error($con)];
}

header('Location: ' . ROOT_URL . 'passenger-dashboard.php');
exit;