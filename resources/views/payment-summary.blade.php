<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1><b><u>Pay</u></b></h1></title>
</head>
<body>
    <form method = "POST" action = "/payment">
        @csrf

        <div class = "payment-summary">
            <div class = "title">
                <h3><b>Payment Summary</b></h3>
            </div>
            <div class = "total-bills">
                <p>Total: {{ $order -> product -> productQuantity * $order -> product -> price }}</p>
            </div>
        </div>

        {{-- masih clueless gimana cara show virtual account number --}}
    </form>
</body>
</html>
