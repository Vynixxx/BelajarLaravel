<!DOCTYPE html>
<html lang=en>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Homepage</title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ route('user.home') }}">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('user.home') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">KSI News</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('profileksi') }}">KSI Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('lecturerksi') }}">KSI Lecturer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                      </li>
                    </ul>
                  </div>
            </div>
        </nav>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h4 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row mt-5 mb-5">
          <div class="col"></div>
          <div class="col-6">
            <form action="" method="GET">
              @csrf
              <div class="input-group">
                <input type="search" name="search" class="form-control rounded" placeholder="Cari nama Buku" aria-label="Search" aria-describedby="search-addon"/>
                <button type="submit" class="btn btn-outline-primary">Search</button>
              </div>
            </form>
          </div>
          <div class="col"></div>
        </div>
        @foreach ($data as $bukus)
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-2"><img style="width: 150px" src="{{ asset('image/' . $bukus->gambar) }}" alt="Cover buku"></div>
              <div class="col-2">
                <p class="fw-bold">Judul</p>
                <p class="fw-bold">Penulis</p>
                <p class="fw-bold">Penerbit</p>
                <p class="fw-bold">Tahun Terbit</p>
                <p class="fw-bold">Deskripsi Buku</p>
              </div>
              <div class="col-8">
                <p>{{ $bukus->judul_buku }}</p>
                <p>{{ $bukus->penulis }}</p>
                <p>{{ $bukus->penerbit }}</p>
                <p>{{ $bukus->tahun_terbit }}</p>
                <p>{{ $bukus->deskripsi }}</p>
              </div>
            </div>
          </div>
          @endforeach
          {{ $data->links() }}
        </div>
      </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>