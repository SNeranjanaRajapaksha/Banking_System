

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selection Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Banking App</a>
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

  <div class="container mt-5">
    <h2 class="text-center mb-4">Select an Action</h2>
    <div class="row justify-content-center">
      <!-- Register Customer Button -->
      <div class="col-md-3 mb-3">
        <a href="/admin/customer/add" class="btn btn-primary btn-block">
          Register Customer
        </a>
      </div>
      <!-- Add Customer Payment Button -->
      <div class="col-md-3 mb-3">
        <a href="/admin/payment/add" class="btn btn-success btn-block">
          Add Customer Payment
        </a>
      </div>
      <!-- View Profile Button -->
      <div class="col-md-3 mb-3">
        <a href="/admin/customer/search" class="btn btn-info btn-block">
          View Profile
        </a>
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

  <!-- Bootstrap JS (Optional for Interactive Features) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

