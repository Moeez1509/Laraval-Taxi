
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_name('TAXI_ADMINSESSID');
    session_start();
}
include('./config/connect.php');

if (isset($_SESSION['admin_uid']) && ($_SESSION['role'] ?? '') === 'admin') {
    header('Location: index.php');
    exit;
}

$email = '';
$error = '';

if (isset($_POST['login'])) {
    $email = trim($_POST['email'] ?? '');
    $password = (string)($_POST['password'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        $sql = "SELECT * FROM users WHERE email = ? AND role = 'admin' LIMIT 1";
        $stmt = mysqli_prepare($con, $sql);

        if (!$stmt) {
            $error = 'Login temporarily unavailable. Please try again.';
        } else {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) === 1) {
                $data = mysqli_fetch_assoc($result);

                $passwordField = null;
                foreach (['password', 'pass', 'passwd', 'user_password'] as $candidate) {
                    if (array_key_exists($candidate, $data)) {
                        $passwordField = $candidate;
                        break;
                    }
                }

                if ($passwordField === null) {
                    $error = 'Login misconfigured (missing password field).';
                } else {
                    $storedPassword = (string)($data[$passwordField] ?? '');
                    $passwordInfo = password_get_info($storedPassword);
                    $passwordOk = ($passwordInfo['algo'] ?? 0) !== 0
                        ? password_verify($password, $storedPassword)
                        : hash_equals($storedPassword, $password);

                    if ($passwordOk) {
                        $userId = $data['id'] ?? $data['admin_uid'] ?? $data['user_id'] ?? null;
                        if (empty($userId)) {
                            $error = 'Login misconfigured (missing user id field).';
                        } else {
                            session_regenerate_id(true);
                            $_SESSION['admin_uid'] = $userId;
                            $_SESSION['admin_uid'] = $userId;
                            $_SESSION['role'] = $data['role'] ?? 'admin';
                            $_SESSION['name'] = $data['name'] ?? 'Admin';
                            $_SESSION['email'] = $data['email'] ?? $email;

                            header('Location: index.php');
                            exit;
                        }
                    } else {
                        $error = 'Invalid email or password!';
                    }
                }
            } else {
                $error = 'Invalid email or password!';
            }

            mysqli_stmt_close($stmt);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login - Quick Ride</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #000);
            height: 100vh;
        }
        .login-card {
            border-radius: 15px;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

<div class="card login-card bg-dark shadow-lg p-4" style="width: 100%; max-width: 400px;">

    <h3 class="text-center mb-3 text-white">Admin Panel &#128274;</h3>

    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger py-2" role="alert">
            <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
        </div>
    <?php } ?>

    <form action="login.php" method="POST">

        <div class="mb-3 text-white">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>

        <div class="mb-3 text-white">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100" name="login">Login as Admin</button>

    </form>

</div>

</body>
</html>
