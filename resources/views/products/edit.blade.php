<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form action="" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{$product->name}}" placeholder="Name" required >
        </div>
        <div>
            <label for="qty">Quantity:</label>
            <input type="number" id="qty" name="qty" value="{{$product->qty}}" placeholder="Quantity" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{$product->price}}" placeholder="Price" required step="any">
            <!-- 'step="any"' allows decimal values for price -->
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" value="{{$product->description}}" placeholder="Description"></textarea>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
