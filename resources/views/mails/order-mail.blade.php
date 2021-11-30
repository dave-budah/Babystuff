<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Hi {{ $order->firstname }} {{ $order->lastname }}</p>
    <p>Your order has been successfully placed.</p>
    <br>
    <table style="width: 600px; text-align: right;">
        <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
            @foreach($order->orderItems as $item)
                <tr>
                    <td><img src="{{ asset('assets/images/products') }}/{{ $item->product->image }}" alt="" width="100"></td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->price * $item->quantity }}</td>
                </tr>
            @endforeach
        <tr>
            <td colspan="3" style="border-top: 1px solid #333"></td>
            <td style="font-size: 1.2rem; font-weight: bold; border-top: 1px solid #333">Subtotal : ${{$order->subtoltal}}</td>
        </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 1.2rem; font-weight: bold;">Tax : ${{$order->tax}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 1.2rem; font-weight: bold;">Shipping : Contact store for details</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 1.4rem; font-weight: bold;">Total : ${{$order->toltal}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
