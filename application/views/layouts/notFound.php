<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
    .error-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f8f9fa;
    }

    .error-content {
        text-align: center;
    }

    .error-content h1 {
        font-size: 6rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .error-content p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .lottie-animation {
        max-width: 400px;
        margin-bottom: 2rem;
    }
    </style>
</head>

<body>

    <div class="error-container">
        <div class="lottie-animation"></div>
        <div class="error-content">
            <h1>404</h1>
            <p>Oops! Halaman yang anda tuju tidak ada.</p>
            <a href="<?php echo base_url() ?>" class="btn btn-primary">Home</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    <script>
    const animation = lottie.loadAnimation({
        container: document.querySelector('.lottie-animation'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'https://lottie.host/d987597c-7676-4424-8817-7fca6dc1a33e/BVrFXsaeui.json'
    });
    </script>
</body>

</html>