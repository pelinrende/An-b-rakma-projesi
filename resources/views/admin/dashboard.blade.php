<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Özel - Tüm Anılar</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff8f1;
            color: #3b2a1f;
        }

        .page {
            padding: 40px 24px;
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
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
        }

        .memory-photo {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .memory-content {
            padding: 16px;
        }

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .public {
            background: #e7f8ec;
            color: #267a3e;
        }

        .private {
            background: #fff0f0;
            color: #b23b3b;
        }

        .name {
            font-weight: bold;
            margin-bottom: 6px;
        }

        .message {
            color: #7a6251;
            font-size: 14px;
            line-height: 1.5;
        }

        .back {
            display: block;
            width: fit-content;
            margin: 36px auto 0;
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
            .grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }

            .memory-photo {
                height: 190px;
            }
        }
    </style>
</head>

<body>

    <div class="page">
        <div class="header">
            <h1>🔐 Özel - Tüm Anılar</h1>
            <p>Herkese açık ve özel tüm anılar burada görünür.</p>
        </div>

        <div class="grid">
            @forelse($memories as $memory)
                <div class="memory-card">
                    <img src="{{ asset('storage/' . $memory->photo_path) }}" class="memory-photo">

                    <div class="memory-content">
                        @if ($memory->is_public)
                            <span class="badge public">Herkese Açık</span>
                        @else
                            <span class="badge private">Özel</span>
                        @endif

                        <div class="name">{{ $memory->name }}</div>
                        <div class="message">{{ $memory->message ?: 'Mesaj bırakılmadı.' }}</div>
                        <form action="/admin/memory/{{ $memory->id }}" method="POST" style="margin-top:12px;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Bu anıyı silmek istediğine emin misin?')"
                                style="
        width:100%;
        border:none;
        background:#b23b3b;
        color:white;
        padding:10px 14px;
        border-radius:12px;
        font-weight:bold;
        cursor:pointer;
    ">
                                🗑 Sil
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p>Henüz anı yok.</p>
            @endforelse
        </div>

        <a class="back" href="/">Ana Sayfaya Dön</a>
    </div>

</body>

</html>
