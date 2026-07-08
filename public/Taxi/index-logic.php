<?php
session_start();
require_once __DIR__ . '/config/connect.php';
require_once __DIR__ . '/config/constant.php';

if (isset($_POST['booknow'])) {
    $request_type = (string) ($_POST['request_type'] ?? 'transportation');
    $request_type = in_array($request_type, ['transportation', 'delivery'], true) ? $request_type : 'transportation';

    $firstname = trim((string) filter_var($_POST['firstname'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $lastname  = trim((string) filter_var($_POST['lastname'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $contact   = trim((string) filter_var($_POST['contact'] ?? '', FILTER_SANITIZE_NUMBER_INT));

    $dropoff_name = trim((string) filter_var($_POST['dropoff_name'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $dropoff_phone = trim((string) filter_var($_POST['dropoff_phone'] ?? '', FILTER_SANITIZE_NUMBER_INT));
    if ($request_type !== 'delivery') {
        $dropoff_name = '';
        $dropoff_phone = '';
    }

    $rawEmail = trim((string) ($_POST['email'] ?? ''));
    $email = $rawEmail === '' ? '' : (string) filter_var($rawEmail, FILTER_VALIDATE_EMAIL);

    $pickup  = trim((string) ($_POST['pickup_address'] ?? ''));
    $dropoff = trim((string) ($_POST['dropoff_address'] ?? ''));

    $scheduled_time = trim((string) ($_POST['scheduled_pickup_time'] ?? ''));
    $services = trim((string) ($_POST['services_type'] ?? ''));

    $flight_number = trim((string) ($_POST['flight_number'] ?? ''));

    // accept older field names too
    $baggage_small = (int) ($_POST['baggage_small'] ?? $_POST['small_baggage'] ?? $_POST['baggege_small'] ?? 0);
    $baggage_large = (int) ($_POST['baggage_large'] ?? $_POST['large_baggage'] ?? $_POST['baggege_large'] ?? 0);

    $adults = max(1, (int) ($_POST['adults'] ?? 1));
    $children = max(0, (int) ($_POST['children'] ?? 0));

    $notes = trim((string) ($_POST['additional_notes'] ?? ''));

    $pickup_lat  = isset($_POST['pickup_lat']) ? (float) $_POST['pickup_lat'] : null;
    $pickup_lng  = isset($_POST['pickup_lng']) ? (float) $_POST['pickup_lng'] : null;
    $dropoff_lat = isset($_POST['dropoff_lat']) ? (float) $_POST['dropoff_lat'] : null;
    $dropoff_lng = isset($_POST['dropoff_lng']) ? (float) $_POST['dropoff_lng'] : null;

    $termsAccepted = isset($_POST['terms']) && (string) $_POST['terms'] === '1';
    $payment_status = trim((string) ($_POST['payment_status'] ?? 'cash'));
    $payment_status = in_array($payment_status, ['cash', 'card'], true) ? $payment_status : 'cash';

    // Validation (field-level)
    $errors = [];
    if ($firstname === '') {
        $errors['firstname'] = 'First name is required.';
    }
    if ($contact === '') {
        $errors['contact'] = 'Phone number is required.';
    }
    if ($rawEmail === '' || $email === '') {
        $errors['email'] = 'A valid email is required.';
    }
    if ($pickup === '') {
        $errors['pickup_address'] = 'Pickup location is required.';
    }
    if ($dropoff === '') {
        $errors['dropoff_address'] = 'Dropoff location is required.';
    }
    if ($pickup !== '' && !$pickup_lat) {
        $errors['pickup_address'] = 'Select pickup location from map.';
    }
    if ($dropoff !== '' && !$dropoff_lat) {
        $errors['dropoff_address'] = 'Select dropoff location from map.';
    }
    if ($scheduled_time === '') {
        $errors['scheduled_pickup_time'] = 'Pickup date is required.';
    }
    if ($services === '') {
        $errors['services_type'] = 'Service type is required.';
    }
    if ($request_type === 'delivery' && $dropoff_name === '') {
        $errors['dropoff_name'] = 'Dropoff name is required for delivery.';
    }
    if ($request_type === 'delivery' && $dropoff_phone === '') {
        $errors['dropoff_phone'] = 'Dropoff phone is required for delivery.';
    }
    if (!$termsAccepted) {
        $errors['terms'] = 'Please accept the terms to submit the booking.';
    }
    if (!in_array($payment_status, ['cash', 'card'], true)) {
        $errors['payment_status'] = 'Invalid payment method selected.';
    }

    // Redirect if error
    if (!empty($errors)) {
        $_SESSION['booknow'] = 'Please correct the highlighted fields.';
        $_SESSION['booknow_errors'] = $errors;
        $_SESSION['booknow_data'] = $_POST;
        header('location: ' . ROOT_URL . 'index.php');
        die();
    }

    // Prepare
    $name = trim($firstname . ' ' . $lastname);
    $status = 'pending';
    $user_id = isset($_SESSION['uid']) ? (int) $_SESSION['uid'] : null;

    // Insert using prepared statement so quotes in addresses don't break SQL
    $sql = "INSERT INTO booking_requests
        (user_id, name, request_type, email, phone, dropoff_name, dropoff_phone, pickup_address, dropoff_address, schedule_pickup_time, service_type, flight_number, baggage_small, baggage_large, adults, children, notes, pickup_lat, pickup_lng, dropoff_lat, dropoff_lng, payment_status, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);
    if (!$stmt) {
        $_SESSION['booknow'] = 'DB error: ' . mysqli_error($con);
        header('location: ' . ROOT_URL . 'index.php');
        die();
    }

    // 23 placeholders => 23 type chars
    $types = 'isssssssssssiiiisddddss';
    mysqli_stmt_bind_param(
        $stmt,
        $types,
        $user_id,
        $name,
        $request_type,
        $email,
        $contact,
        $dropoff_name,
        $dropoff_phone,
        $pickup,
        $dropoff,
        $scheduled_time,
        $services,
        $flight_number,
        $baggage_small,
        $baggage_large,
        $adults,
        $children,
        $notes,
        $pickup_lat,
        $pickup_lng,
        $dropoff_lat,
        $dropoff_lng,
        $payment_status,
        $status
    );

    $ok = mysqli_stmt_execute($stmt);
    if ($ok) {
        $_SESSION['booknow-success'] = 'Ride booked successfully';
    } else {
        $_SESSION['booknow'] = 'DB insert failed: ' . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);

    header('location: ' . ROOT_URL . 'index.php');
    die();
}
