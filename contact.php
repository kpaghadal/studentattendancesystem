<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/storage.php';

$success = '';
if (is_post()) {
    save_contact(
        trim(post('name', '')),
        trim(post('email', '')),
        trim(post('message', ''))
    );
    $success = 'Thank you! Your message has been sent.';
}

require_once __DIR__ . '/includes/header.php';
?>
<br><br>

<div class="container my-5">
    <div class="row g-4">
        <!-- Contact Form -->
        <div class="col-lg-6">
            <div class="p-4 shadow-sm rounded-4 border border-light">
                <h2 class="fw-bold mb-4 text-primary"><i class="bi bi-envelope-fill me-2"></i>Contact Us</h2>

                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo h($success); ?></div>
                <?php endif; ?>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Your full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="6" placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-2">
                        <i class="bi bi-send-fill me-2"></i>Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-6">
            <div class="p-4 bg-light shadow-sm rounded-4 border border-light h-100 d-flex flex-column justify-content-center">
                <h3 class="fw-bold mb-4 text-primary">Get in Touch</h3>
                <p class="mb-3"><i class="bi bi-geo-alt-fill me-2"></i>Shree HN Shukla Collage, Rajkot, India</p>
                <p class="mb-3"><i class="bi bi-telephone-fill me-2"></i>+123 456 7890</p>
                <p class="mb-3"><i class="bi bi-envelope-fill me-2"></i>studentattendance@gmail.com</p>
                <p class="text-muted mt-4">We are always here to answer your questions and support you with any concerns regarding the Smart Attendance System.</p>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
