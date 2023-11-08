<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>KSI News</title>
</head>
<body oncontextmenu = "return false" oncopy="return false" oncut="return false" onpaste="return false">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('user.home')); ?>">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo e(route('user.home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="<?php echo e(route('news')); ?>">KSI News</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('profileksi')); ?>">KSI Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('lecturerksi')); ?>">KSI Lecturer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="<?php echo e(route('logout')); ?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="<?php echo e(route('user.home')); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </nav>
       <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="https://ti.polbeng.ac.id/images/news/c10grgeb0nnoWhatsApp%20Image%202023-09-13%20at%2011.43.04.jpeg" class="img-fluid rounded-start" alt="img1" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Diklat Pembelajaran Berbasis Industri Angkatan II (Kedua) Tingkat SMK Negeri dan Swasta Se-Provinsi Riau Tahun 2023</h5>
              <p class="card-text">Diklat Pembelajaran Berbasis Industri Angkatan II (Kedua) Tingkat SMK Negeri dan Swasta Se-Provinsi Riau Tahun 2023 <br> "Pekanbaru- Dosen Teknik Informatika Polbeng Kasmawi, M.Kom bersama M.Nasir, M.Kom  melaksanakan salah satu Tri Dharma Perguruan Tinggi dalam bentuk Pengabdian Masyarakat dengan menjadi Narasumber pada kegiatan"</p>
              <p class="card-text"><small class="text-muted">Last updated september 14, 2023</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="https://ti.polbeng.ac.id/images/news/48q0nsadjhvjWhatsApp%20Image%202023-08-31%20at%2015.19.50.jpeg" class="img-fluid rounded-start" alt="img2" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">250 Mahasiswa Baru Jurusan Teknik Informatika Mengikuti Acara Pengenalan Jurusan Teknik Informatika Politeknik Negeri Bengkalis Tahun 2023</h5>
              <p class="card-text">250 Mahasiswa Baru Jurusan Teknik Informatika Mengikuti Acara Pengenalan Jurusan Teknik Informatika Politeknik Negeri Bengkalis Tahun 2023 <br> "250 Mahasiswa Baru Jurusan Teknik Informatika Mengikuti Acara Pengenalan Jurusan Teknik Informatika Politeknik Negeri Bengkalis Tahun 2023"</p>
              <p class="card-text"><small class="text-muted">Last updated August 31, 2023</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="https://ti.polbeng.ac.id/images/news/8ck2rbjhup8dWhatsApp%20Image%202023-03-20%20at%2018.59.55.jpeg" class="img-fluid rounded-start" alt="img3" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Dosen Jurusan Teknik Informatika Melaksanakan Uji Kompetensi Keahlian (UKK) di SMK Negeri 1 Siak Kecil</h5>
              <p class="card-text">Dosen Jurusan Teknik Informatika Melaksanakan Uji Kompetensi Keahlian (UKK) di SMK Negeri 1 Siak Kecil <br> "Dosen Jurusan Teknik Informatika Melaksanakan Uji Kompetensi Keahlian (UKK) di SMK Negeri 1 Siak Kecil Mulai hari Rabu tanggal 15 hingga Kamis 16 Maret 2023. Adapun Dosen yang ditugaskan untuk melaksanakan UKK di SMK 1"</p>
              <p class="card-text"><small class="text-muted">Last updated March 17, 2023</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="https://ti.polbeng.ac.id/images/news/irbpog4glgavIMG_1170.JPG" class="img-fluid rounded-start" alt="img4" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Tim Pengabdian Kepada Masyarakat (PKM) Jurusan TI melaksanakan BimTek Pengelolaan Aplikasi permohonan kepengurusan kependudukan secara online kepada staf bagian layanan pemerintahan Desa Air Putih</h5>
              <p class="card-text">Kegiatan BimTek ini diberikan kepada tenaga operator dan tenaga layanan kependudukan desa air putih, kegiatan ini bertujuan agar pemerintahan desa air putih dapat menggunakan dan mengelola aplikasi permohonan</p>
              <p class="card-text"><small class="text-muted">Last updated January 31, 2023</small></p>
            </div>
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\KSI5A-THORIQ-PROJECT\profilKSI\resources\views/news.blade.php ENDPATH**/ ?>