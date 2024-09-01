<!DOCTYPE html>
<html>
<head>
    <title>Add Payment</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
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
        <h2 class="mb-4">Add Payment</h2>
        <form action="{{ route('admin.addPayment') }}" method="POST" class="bg-dark p-4 rounded border border-secondary">
            @csrf
            <div class="mb-3">
                <label for="customer_id" class="form-label">Select Customer:</label>
                <select id="customer_id" name="customer_id" class="form-select bg-dark text-light border-secondary" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount:</label>
                <input type="number" id="amount" name="amount" step="0.01" class="form-control bg-dark text-light border-secondary" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" id="description" name="description" class="form-control bg-dark text-light border-secondary">
            </div>

            <button type="submit" class="btn btn-primary">Add Payment</button>
        </form>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq2OSxLn5vE7C5+h1De2nX3q1j2l4k+RbWjX9Bl7KqvB4C5vT7" crossorigin="anonymous"></script>
</body>
</html>
