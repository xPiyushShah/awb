<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration Form</title>
    <style>
        /* Your existing CSS styles */
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery CDN -->
</head>
<body>
    <div class="container">
        <h2>User Registration Form</h2>
        <?php if (isset($validation)): ?>
            <div class="error-message">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <form id="registrationForm"  method="post" action="/upload"> <!-- Ensure method="post" is specified -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?= old('name') ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= old('email') ?>" required>
            </div>
            <div class="form-group">
                <label for="refer_id">Refer ID (optional):</label>
                <input type="text" id="refer_id" name="refer_id" value="<?= old('refer_id') ?>">
            </div>
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
