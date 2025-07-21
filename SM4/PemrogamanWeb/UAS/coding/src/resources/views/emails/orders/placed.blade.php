<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pesanan</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { width: 90%; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #ffffff; }
        .header { font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px; color: #111827; }
        .order-details { margin-bottom: 20px; width: 100%; border-collapse: collapse; }
        .order-details th, .order-details td { text-align: left; padding: 12px; border-bottom: 1px solid #eee; }
        .order-details th { color: #555; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Terima Kasih Atas Pesanan Anda!</div>
        <p>Halo, <strong>{{ $order->customer_name }}</strong>,</p>
        <p>Pesanan Anda dengan nomor #{{ $order->id }} telah kami terima dan sedang dalam proses. Berikut adalah detail pesanan Anda:</p>
        
        <table class="order-details">
            <tr>
                <th width="40%">Produk</th>
                <td>{{ $order->product->name }}</td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>{{ $order->quantity }}</td>
            </tr>
            <tr>
                <th>Total Harga</th>
                <td><strong>Rp {{ number_format($order->total_price, 0, ',', '.') }}</strong></td>
            </tr>
            <tr>
                <th>Alamat Pengiriman</th>
                <td>{{ $order->shipping_address }}</td>
            </tr>
        </table>

        <p>Kami akan segera memberitahu Anda setelah pesanan dikirim. Terima kasih telah berbelanja di GarageAuto.id!</p>
        
        <div class="footer">
            &copy; {{ date('Y') }} GarageAuto.id
        </div>
    </div>
</body>
</html>