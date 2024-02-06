<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Product</title>
    <!-- Include Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <!-- Heading Section -->
    <h1>Edit a Product</h1>

    <!-- Error Display Section -->
    <div>
        @if($errors->any())
        <!-- Display validation errors as a list -->
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <!-- Product Update Form -->
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        <!-- CSRF Token for Form Security -->
        @csrf
        <!-- Method Override for PUT request -->
        @method('put')

        <!-- Name Input Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $product->name }}" required>
        </div>

        <!-- Quantity Input Field -->
        <div class="mb-3">
            <label for="qty" class="form-label">Qty:</label>
            <input type="text" name="qty" id="qty" class="form-control" placeholder="Qty" value="{{ $product->qty }}" required>
        </div>

        <!-- Price Input Field -->
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Price" value="{{ $product->price }}" required>
        </div>

        <!-- Description Input Field -->
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{ $product->description }}" required>
        </div>

        <!-- Submit Button -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>

    <!-- Include Bootstrap JS and Popper.js (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
