<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Anı Bırak</title>

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
            max-width: 460px;
            background: white;
            border-radius: 28px;
            padding: 32px 26px;
            box-shadow: 0 20px 50px rgba(120, 80, 40, 0.15);
            border: 1px solid #f0dfcc;
        }

        h1 {
            text-align: center;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #7a6251;
            margin-bottom: 28px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            box-sizing: border-box;
            padding: 14px;
            border-radius: 14px;
            border: 1px solid #e3cdb4;
            margin-bottom: 18px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
        }

        .option {
            border: 1px solid #e3cdb4;
            padding: 14px;
            border-radius: 14px;
            margin-bottom: 10px;
            display: block;
        }

        .btn {
            width: 100%;
            border: none;
            padding: 16px;
            border-radius: 16px;
            background: #c89446;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 12px;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #8a6334;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="page">
        <div class="card">
            <h1>📸 Anı Bırak</h1>
            <p class="subtitle">Fotoğrafını ve mesajını bizimle paylaş.</p>


            <form action="/ani-kaydet" method="POST" enctype="multipart/form-data" onsubmit="showLoading()">
                @csrf

                <label>İsminiz</label>
                <input type="text" name="name" placeholder="İsminizi yazın" required>

                <label>Mesajınız</label>
                <textarea name="message" rows="4" placeholder="İrem ve Cem'e istediğiniz mesaj..."></textarea>

                <label>Fotoğraf</label>
                <input type="file" name="photo" accept="image/*" required>

                <label>Görünürlük Tercihi</label>

                <label class="option">
                    <input type="radio" name="is_public" value="1" checked>
                    Herkese Açık
                </label>

                <label class="option">
                    <input type="radio" name="is_public" value="0">
                    İrem ve Cem'e Özel
                </label>

                <button class="btn" id="submitBtn" type="submit">Gönder ❤️</button>

                <div id="loadingText"
                    style="display:none; text-align:center; margin-top:14px; color:#8a6334; font-weight:bold;">
                    Anınız yükleniyor, lütfen bekleyin...
                </div>
            </form>

            <a class="back" href="/">← Ana Sayfaya Dön</a>
        </div>
    </div>
    <script>
        function showLoading() {
            const btn = document.getElementById('submitBtn');
            const loading = document.getElementById('loadingText');

            btn.disabled = true;
            btn.innerText = 'Yükleniyor...';
            loading.style.display = 'block';
        }
    </script>
</body>

</html>
