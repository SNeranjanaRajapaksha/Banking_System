<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
</nav>
<h1><center>Registration User</center></h1>
<div class="bg-dark text-light">
    <div class="container mt-5">
        <div class="text-center">
        <h2 class="mb-4">Add Customer</h2>
        </div>
        <form action="{{ route('admin.registerCustomer') }}" method="POST" class="bg-dark p-4 rounded border border-secondary">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control bg-dark text-light border-secondary" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control bg-dark text-light border-secondary" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" id="phone" name="phone" class="form-control bg-dark text-light border-secondary" required>
            </div>

            <div class="mb-3">
                <label for="account_type" class="form-label">Account Type:</label>
                <select id="account_type" name="account_type" class="form-select bg-dark text-light border-secondary" required>
                    <option value="savings">Savings</option>
                    <option value="current">Current</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Register Customer</button>
        </form>
    </div>
</div>
</div>
 <!-- Footer -->
 <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About Us</h5>
                    <p>Our banking app offers a wide range of services tailored to your needs. We value security and user convenience above all.</p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <p>Email: support@bankingapp.com<br>Phone: +123 456 7890</p>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Banking App. All rights reserved.
        </div>
    </footer>
    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq2OSxLn5vE7C5+h1De2nX3q1j2l4k+RbWjX9Bl7KqvB4C5vT7" crossorigin="anonymous"></script>
</body>
</html>
