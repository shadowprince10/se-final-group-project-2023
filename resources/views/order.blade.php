<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1><b>Order</b></h1></title>
    <!-- J-Query library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- JS Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class = "product-img">
        <img src = {{ $image }}>
    </div>

    <div class = "product-name">
        <h1><b>{{ $name }}</b></h1>
    </div>

    <div class = "product-rating">
        <p><b>{{ $rating }}</b></p>
    </div>

    <div class = "rental-price">
        <h3><b>{{ $price }} / Day</b></h3>
    </div>

    <div class = "description">
        <p><b>Detail</b></p>
        <p>{{ $desc }}</p>
    </div>

    <div class = "order-details">
        <div class = "product-img">
            <img src = {{ $image }}>
        </div>

        <div class = "product-name">
            <p><b>{{ $name }}</b></p>
        </div>

        <div class = "order-quantity">
            <button id = "reduceButton">-</button>
            <input type = "text" id = "quantityInput" value = "1" readonly>
            <button id = "addButton">+</button>
        </div>

        <script>
            const reduceButton = document.getElementById('reduceButton');
            const addButton = document.getElementById('addButton');
            const quantityInput = document.getElementById('quantityInput');

            reduceButton.addEventListener('click', () => {
                let quantity = parseInt(quantityInput.value);
                if (quantity > 1) {
                    quantity--;
                    quantityInput.value = quantity;
                }
            });
        </script>

        <div class = "chat">
            <a href = "{{ route('chat') }}" class = "btn btn-primary">Chat</a>
        </div>

        <div class = "cart">
            <a href = "{{ route('cart') }}" class = "btn btn-primary">Cart</a>
        </div>
    </div>

    <div class = "location">
        <a href = "{{ route('location.select') }}" class = "btn btn-primary">Location</a>
    </div>

    <div class = "rental-date">
        <a href = "{{ route('rental-date.select') }}" class = "btn btn-primary">Choose Rental Date</a>
    </div>
</body>
</html>

{{-- rental date taruh di model/table/atribut apa? Buat model baru lagi namanya rental atau taruh di model product atau taruh di model order? --}}
{{-- cara validasi untuk pilih lokasi dan rentang waktu (dalam tanggal dd/mm/yyyy) sewa/rental, baru muncul tombol Order Now bagaimana? --}}
