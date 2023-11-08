<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Input Berita</title>
</head>
    <body oncontextmenu = "return false" oncopy="return false" oncut="return false" onpaste="return false">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.home') }}">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('input.news') }}">Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('input.lecturer') }}">Dosen & Lulusan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.buku') }}">Buku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.pinjam') }}">Peminjaman</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                  </li>
                </ul>
              </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan judul berita">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan isi berita"></textarea>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="col-lg-7">
            <button type="button" class="btn btn-success">Save changes</button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>