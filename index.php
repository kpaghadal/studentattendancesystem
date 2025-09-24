<?php require_once __DIR__ . '/includes/header.php'; ?>
<br><br><br><br>
<!-- Hero Section -->
<div class="p-5 mb-5 text-white hero-gradient rounded-4 shadow-lg">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold mb-3">Student Attendance System</h1>
        <p class="lead mb-4 col-lg-8 mx-auto">
            Simplify attendance management for your institution. Faculty can manage students and take attendance, while students can view their records easily.
        </p>
        <?php if (!$user): ?>
            <a class="btn btn-light btn-lg shadow-sm" href="/studentattendancesystem/login.php">Get Started</a>
        <?php endif; ?>
    </div>
</div>

<!-- Features Section -->
<div class="container mb-5">
    <div class="row g-4 text-center">

        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-zoom">
                <div class="card-body p-4">
                    <i class="bi bi-info-circle-fill text-primary display-4 mb-3"></i>
                    <h5 class="card-title fw-bold">About</h5>
                    <p class="card-text">Learn more about the Smart Attendance System and its features.</p>
                    <a href="/studentattendancesystem/about.php" class="btn btn-outline-primary btn-sm mt-2">About Us</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-zoom">
                <div class="card-body p-4">
                    <i class="bi bi-envelope-fill text-primary display-4 mb-3"></i>
                    <h5 class="card-title fw-bold">Contact</h5>
                    <p class="card-text">Have questions or feedback? Reach out to us anytime.</p>
                    <a href="/studentattendancesystem/contact.php" class="btn btn-outline-primary btn-sm mt-2">Contact</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-zoom">
                <div class="card-body p-4">
                    <i class="bi bi-journal-check text-primary display-4 mb-3"></i>
                    <h5 class="card-title fw-bold">Attendance</h5>
                    <p class="card-text">Faculty can take attendance, students can view their records.</p>
                    <a href="<?php echo $user ? ($user['role']==='faculty' ? '/studentattendancesystem/attendance_take.php' : '/studentattendancesystem/attendance_view.php') : '/studentattendancesystem/login.php'; ?>" class="btn btn-outline-primary btn-sm mt-2">Go</a>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Custom CSS for hover zoom effect -->
<style>
.hero-gradient {
    background: linear-gradient(135deg, #0066cc, #00ccff);
}

.hover-zoom:hover {
    transform: translateY(-5px) scale(1.03);
    transition: all 0.3s ease;
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
