<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Cafe Shop</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow rounded">
                <div class="card-body">
                    <h3 class="text-center mb-4">Create Account</h3>

                    <?php 
                        if (isset($_GET['err'])) {
                            echo '<div class="alert alert-danger text-center">Registration failed. Please try again.</div>';
                        } elseif (isset($_GET['success'])) {
                            echo '<div class="alert alert-success text-center">Registration successful. You can now <a href="login.php">login</a>.</div>';
                        }
                    ?>

                    <form action="register_process.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="register" class="btn btn-success">Register</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <a href="login.php">Already have an account? Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
