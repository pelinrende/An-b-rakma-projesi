<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Admin Girişi</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #3b2a1f;
            min-height: 100vh;

            background:
                linear-gradient(rgba(0, 0, 0, 0.35),
                    rgba(0, 0, 0, 0.35)),
                url('/images/iremcem3.jpeg');

            background-size: cover;
            background-position: center 25%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
        }

        .card {
            width: 100%;
            max-width: 420px;
            background: white;
            border-radius: 28px;
            padding: 36px 28px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(120, 80, 40, 0.15);
            border: 1px solid #f0dfcc;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 15px;
            border-radius: 14px;
            border: 1px solid #e3cdb4;
            margin: 18px 0;
            font-size: 16px;
        }

        button {
            width: 100%;
            border: none;
            padding: 16px;
            border-radius: 16px;
            background: #c89446;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .error {
            color: #b23b3b;
            font-weight: bold;
            margin-top: 12px;
        }
    </style>
</head>

<body>

    <div class="page">
        <div class="card">
            <h1>🔐 Özel Anılar</h1>
            <p>Hey Dostummm!!! Ne yapıyorsun? </p>
            <p>Özel anıları görüntülemek için şifre girmelisin.</p>

            <form action="/admin/login" method="POST">
                @csrf

                <input type="password" name="password" placeholder="Admin şifresi" required>

                <button type="submit">Giriş Yap</button>
                <p></p>
                <button type="button" onclick="window.location.href = '/';">Hadii Anı bırakmak için Ana Sayfaya
                    Dön</button>
            </form>

            @if (session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif
        </div>
    </div>

</body>

</html>
