<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search User Profile</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="text-center mb-4">Search User Profile</h2>
  
  <!-- Search Form -->
  <form class="form-inline justify-content-center">
    <div class="form-group mb-2">
      <label for="username" class="sr-only">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username or ID">
    </div>
    <button type="submit" class="btn btn-primary mb-2 ml-2">Search</button>
  </form>

  <!-- Search Results -->
  <div class="mt-4">
    <h5>Search Results:</h5>
    <!-- Example profile card -->
    <div class="card mt-3" id="profileCard" style="display:none;">
      <div class="card-body">
        <h5 class="card-title">User Name</h5>
        <p class="card-text">Email: user@example.com</p>
        <p class="card-text">Phone: 123-456-7890</p>
        <!-- Additional details can be added here -->
        <a href="#" class="btn btn-info">View Full Profile</a>
      </div>
    </div>
  </div>

</div>

<!-- Bootstrap JS (Optional for Interactive Features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
