<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Galeri</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff8f1;
            color: #3b2a1f;
        }

        .page {
            min-height: 100vh;
            padding: 40px 24px;
        }

        .header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 36px;
        }

        .header h1 {
            font-size: 34px;
            margin-bottom: 8px;
        }

        .header p {
            color: #7a6251;
            font-size: 16px;
        }

        .grid {
            max-width: 1320px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 22px;
        }

        .memory-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(120, 80, 40, 0.14);
            border: 1px solid #f0dfcc;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .memory-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 60px rgba(120, 80, 40, 0.22);
        }

        .memory-photo {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .memory-content {
            padding: 16px 16px 18px;
        }

        .name {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: 6px;
        }

        .message {
            color: #7a6251;
            line-height: 1.5;
            font-size: 14px;
        }

        .back {
            display: block;
            width: fit-content;
            margin: 40px auto 0;
            color: white;
            background: #c89446;
            padding: 14px 22px;
            border-radius: 16px;
            text-decoration: none;
            font-weight: bold;
        }

        @media (max-width: 1100px) {
            .grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 700px) {
            .page {
                padding: 28px 16px;
            }

            .grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }

            .memory-photo {
                height: 190px;
            }

            .header h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="grid">
        @forelse($memories as $memory)
            <div class="memory-card">
                <img src="{{ asset('storage/' . $memory->photo_path) }}" alt="{{ $memory->name }}" class="memory-photo">

                <div class="memory-content">
                    <div class="name">{{ $memory->name }} 🤍</div>

                    <div class="message">
                        {{ $memory->message ?: 'Mesaj bırakılmadı.' }}
                    </div>
                </div>
            </div>
        @empty
            <p>Henüz herkese açık anı yok.</p>
        @endforelse
    </div>

</body>

</html>
