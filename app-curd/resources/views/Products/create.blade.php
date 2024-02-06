<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    <!-- Include Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Qty:</label>
            <input type="text" name="qty" id="qty" class="form-control" placeholder="Qty" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Price" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Description" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save a New Product</button>
        </div>
    </form>

    <!-- Include Bootstrap JS and Popper.js (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
