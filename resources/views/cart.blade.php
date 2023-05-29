<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous" rel = "stylesheet">
    <title><h1>Cart</h1></title>
</head>
<body>
    <div class="cart">
        @if(count($cartProducts) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartProducts)
                        <tr>
                            <td>{{ $cartProducts -> product -> productName }}</td>
                            <td>{{ $cartProducts -> product -> price }}</td>
                            <td>{{ $cartProducts -> product -> productQuantity }}</td>
                            <td>{{ ($cartProducts -> product -> price) * ($cartProducts -> product -> productQuantity) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Your cart is empty.</p>
        @endif

        <div class="checkout-button">
            <a href="{{ route('payment') }}">Pay</a>
        </div>
    </div>
</body>
</html>
