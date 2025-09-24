<?php
require_once __DIR__ . '/includes/auth.php';

$error = '';
if (is_post()) {
    $username = trim(post('username', ''));
    $password = post('password', '');
    if (login($username, $password)) {
        $user = current_user();
        if ($user['role'] === 'faculty') {
            redirect('/studentattendancesystem/attendance_take.php');
        } else {
            redirect('/studentattendancesystem/attendance_view.php');
        }
    } else {
        $error = 'Invalid username or password';
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg rounded-4 p-5" style="width: 100%; max-width: 400px;">
        <h3 class="fw-bold mb-4 text-center text-primary">Login</h3>

        <?php if ($error): ?>
            <div class="alert alert-danger text-center"><?php echo h($error); ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3 position-relative">
                <input type="text" name="username" class="form-control ps-4" placeholder="Username" required>
                <i class="bi bi-person-fill position-absolute top-50 start-0 translate-middle-y ms-2 text-muted"></i>
            </div>
            <div class="mb-3 position-relative">
                <input type="password" name="password" class="form-control ps-4" placeholder="Password" required>
                <i class="bi bi-lock-fill position-absolute top-50 start-0 translate-middle-y ms-2 text-muted"></i>
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold mt-2 shadow-sm">Login</button>
        </form>
    </div>
</div>

<style>
.card input:focus {
    border-color: #0066cc;
    box-shadow: 0 0 8px rgba(0, 102, 204, 0.2);
    outline: none;
}
.card i {
    pointer-events: none;
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
