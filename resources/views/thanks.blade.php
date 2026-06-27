<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Teşekkürler</title>
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

            animation: pop .7s ease;

        }

        @keyframes pop {

            0% {
                transform: scale(.6);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }

        }

        h1 {
            margin-bottom: 12px;
        }

        p {
            color: #7a6251;
            line-height: 1.6;
        }

        .btn {
            display: block;
            text-decoration: none;
            padding: 15px 20px;
            border-radius: 16px;
            font-weight: bold;
            margin-top: 14px;
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



        @keyframes heartbeat {

            0%,
            100% {
                transform: scale(1);
            }

            25% {
                transform: scale(1.2);
            }

            50% {
                transform: scale(.95);
            }

            75% {
                transform: scale(1.15);
            }

        }
    </style>
</head>

<body>

    <div class="page">
        <div class="card">
            <h1>❤️ Anı Gönderildi</h1>

            <p>
                Teşekkür ederiz.
                İsterseniz herkese açık anıları görüntüleyebilirsiniz.
            </p>

            <a class="btn btn-primary" href="/ani-birak">Yeni Anı Bırak</a>
            <a class="btn btn-primary" href="/ani-birak">Herkese Açık Anıları görüntüle</a>
            <a class="btn btn-secondary" href="/">Ana Sayfaya Dön</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>

        <script>
            function fire(particleRatio, opts) {
                confetti(Object.assign({}, opts, {
                    particleCount: Math.floor(120 * particleRatio)
                }));
            }

            const duration = 2200;
            const animationEnd = Date.now() + duration;

            (function frame() {

                fire(0.25, {
                    spread: 70,
                    startVelocity: 55,
                    origin: {
                        x: 0.1,
                        y: 0.8
                    }
                });

                fire(0.25, {
                    spread: 70,
                    startVelocity: 55,
                    origin: {
                        x: 0.9,
                        y: 0.8
                    }
                });

                fire(0.20, {
                    spread: 120,
                    decay: 0.92,
                    scalar: 1.3,
                    origin: {
                        x: 0.5,
                        y: 0.4
                    }
                });

                fire(0.30, {
                    spread: 180,
                    startVelocity: 40,
                    scalar: 1.1,
                    origin: {
                        x: Math.random(),
                        y: Math.random() * 0.3
                    }
                });

                if (Date.now() < animationEnd) {
                    requestAnimationFrame(frame);
                }

            })();
        </script>
    </div>
</body>

</html>
