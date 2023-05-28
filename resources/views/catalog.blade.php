<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1><b><u>Catalog</u></b></title>
</head>
<body>
    @foreach($products as $p)
        <div class = "product">
            <h3><b>{{ $p -> name }}</b></h3>
            <p>{{ $p -> category -> categoryName }}</p>
            <p>{{ $p -> rentalPrice }} / Day</p>
        </div>
    @endforeach

    <div class = "chat">
        <a href = "{{ route('chat') }}" class = "btn btn-primary">Chat</a>
    </div>

    <div class = "add-to-cart">
        <a href = "{{ route('cart') }}" class = "btn btn-primary">Cart</a>
    </div>

    {{ $productPage -> links() }}
</body>
</html>
