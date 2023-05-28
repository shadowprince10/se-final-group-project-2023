<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1><b><u>Payment</u></b></h1></title>
</head>
<body>
    <div class = "product-image">
        <img src = {{ $image }}>
    </div>

    <div class = "product-name">
        <h3><b>{{ $name }}</b>
    </div>

    <div class = "product-price">
        <h3><b>{{ $price }}</b></h3>
    </div>

    <section class = "delivery-details">
        <div class = "section-title">
            <b>Pengiriman dan Pembayaran</b>
        </div>

        <div class = "address">
            <p>{{ $address }}</p>
        </div>

        <form method = "POST" action = "/payment">
            @csrf

            <label for = "courier"><b>Choose Courier</b></label>
            <div class = "courier-form-group">
                <select class = "courier-form-control" id = "courier" name = "courier" required>
                    <option value = "gojek">GoJek Rp 15000</option>
                    <option value = "grab">Grab Rp 15000</option>
                    <option value = "kurir-kami">Kurir Kami Rp 10000</option>
                </select>
            </div>


            <label for = "payment-method"><h2><b>Select Payment Method</b></h2></label>
            <div class = "payment-form-group">
                <select class = "payment-form-control" id = "payment-method" name = "payment-method" required>
                    <option value = "bca">BCA Virtual Account</option> {{-- seharusnya kalau pencet option credit/debit card, redirect user ke page untuk mengisi detail kartu kredit/debit seperti kartu, berlaku hingga, dan CVV (mm/yyyy) --}}
                    <option value = "mandiri">Mandiri Virtual Account</option>
                    <option value = "bri">BRI Virtual Account</option>
                    <option value = "bni">BNI Virtual Account</option>
                    <option value = "cimb-niaga">Cimb Niaga Virtual Account</option>
                    {{-- berdasarkan 5 bank dari Indonesia yang paling sering dipakai untuk transaksi --}}
                    <option value = "paypal">PayPal</option>
                    <option value = "gopay">GoPay</option>
                    <option value = "shopeepay">ShopeePay</option>
                    <option value = "link-aja">Link Aja</option>
                    <option value = "dana">Dana</option>
                </select>
            </div>

            <h3><b>Order Summary</b></h3>
            <div class = "order-summary">
                <table>
                    <thead>
                        <tr>
                            <th>Total Rental Price per Day</th>
                            <th>Shipping Cost</th>
                            <th>Discount</th>
                            <th>Shipping Cost</th>
                            <th>Total Item Rented</th>
                            <th>Total Bills</th>
                        </tr>
                    </thead>

                    <tbody>
                    {{-- harus di-research lagi bagaimana cara memasukkan data order dari customer ke tabel di bagian order summary --}}
                        @foreach($order)
                            <tr>
                                <td>{{ $order -> product -> productName }}</td>
                                <td>{{ $order -> shipping -> cost }}</td>
                                <td>{{ $order -> product -> discount }}</td>
                                <td>{{ $order -> product -> price }}</td>
                                <td>{{ $order -> orderQuantity }}</td>
                                <td>{{ $order -> product -> productQuantity * $order -> product -> price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>

        <div class = "order-notes-form-group">
            <label for = "order-notes">Order Notes - 0 to 255 characters only:</label>
            <textarea id = "order-notes" name = "order-notes" class = "order-notes-form-control" rows = "4"></textarea>
        </div>

        <div>
            <button type = "submit">Submit</button>
        </div>

        <div>
            <button type = "submit">Pay</button>
        </div>
    </section>
</body>
</html>
