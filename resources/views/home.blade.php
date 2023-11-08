<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body oncontextmenu = "return false" oncopy="return false" oncut="return false" onpaste="return false">
<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem informasi</a>
  </div>
</nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary text-wrap">Selamat Datang!</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri Bengkalis</h4>
                <h6 class="mt-3">Silahkan
                    <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a> atau
                    <a href="{{ route('auth.register') }}" style="text-decoration: none">daftar</a>
                        Jika Anda belum punya akun
                </h6>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>