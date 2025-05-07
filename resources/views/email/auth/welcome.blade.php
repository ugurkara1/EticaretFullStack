<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoş Geldin</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f6f6f6; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 8px;">
        <h2>Merhaba {{ $user->name }},</h2>
        <p>Hoş geldin! Hesabın başarıyla oluşturuldu. Artık alışveriş yapmaya hazırsın! 🎉</p>
        <p>
            Aşağıdaki butona tıklayarak e-posta adresini doğrulayabilirsin:
        </p>
        <p style="text-align: center; margin: 30px 0;">
            <a href="{{ route('verify', ['token' => $token]) }}"
               style="background-color: #3490dc; color: white; padding: 12px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">
                Mailimi Doğrula
            </a>
        </p>
        <p>Eğer bu işlemi sen yapmadıysan, bu e-postayı göz ardı edebilirsin.</p>
        <p style="margin-top: 40px;">Teşekkürler,<br>Ekibimiz</p>
    </div>
</body>
</html>
