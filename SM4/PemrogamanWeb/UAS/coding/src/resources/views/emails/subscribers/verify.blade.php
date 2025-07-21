<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Email</title>
    <style>
        /* (Gunakan style yang sama seperti email pesanan untuk konsistensi) */
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { width: 90%; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #ffffff; }
        .header { font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px; color: #111827; }
        .button { display: inline-block; background-color: #3B82F6; color: #ffffff; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Satu Langkah Lagi!</div>
        <p>Halo,</p>
        <p>Terima kasih telah berlangganan newsletter GarageAuto.id. Silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda.</p>
        
        <p style="text-align: center; margin: 30px 0;">
            <a href="{{ $verificationUrl }}" class="button">Verifikasi Email</a>
        </p>

        <p>Jika Anda tidak merasa mendaftar, Anda bisa mengabaikan email ini.</p>
        
        <div class="footer">
            &copy; {{ date('Y') }} GarageAuto.id
        </div>
    </div>
</body>
</html>