<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Düğün Anılarımız</title>

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
            max-width: 430px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            border-radius: 28px;
            padding: 36px 28px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.55);
        }

        .heart {
            font-size: 42px;
            margin-bottom: 12px;
        }

        h1 {
            font-size: 30px;
            margin: 0 0 12px;
        }

        p {
            font-size: 16px;
            color: #7a6251;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        .btn {
            display: block;
            text-decoration: none;
            padding: 15px 20px;
            border-radius: 16px;
            font-weight: bold;
            margin-bottom: 14px;
        }

        .btn-primary {
            background: #c89446;
            color: white;
        }

        .btn-secondary {
            background: white;
            color: #8a6334;
            border: 1px solid #d8b989;
        }

        .note {
            margin-top: 24px;
            font-size: 13px;
            color: #9b8170;
        }

        .counter {
            margin: 22px 0;
            padding: 14px 18px;
            background: #fff8f1;
            border: 1px solid #f0dfcc;
            border-radius: 18px;
            color: #8a6334;
            font-weight: bold;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <div class="page">
        <div class="card">


            <h1><i>İrem 🤍 Cem </h1></i>

            <p> Yüklediğin her anı, düğün hatırası olarak saklanacak.</p>


            <a class="btn btn-primary" href="/ani-birak">📸 Anı Bırak</a>


            <a class="btn btn-secondary" href="/galeri">✨ Herkese Açık Anılara Bak</a>
            <a class="btn btn-secondary" href="/admin">✨ Özel Anılara Bak</a>


            <div class="counter">
                {{ $totalMemories }} anı bırakıldı
            </div>
            <div class="note">
                Her anı bizim için çok kıymetli ❤️
            </div>

        </div>

    </div>

</body>

</html>
