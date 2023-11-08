<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Input Dosen</title>
</head>
    <body oncontextmenu = "return false" oncopy="return false" oncut="return false" onpaste="return false">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('admin.home')); ?>">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('admin.home')); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('input.news')); ?>">Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('input.lecturer')); ?>">Dosen & Lulusan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.buku')); ?>">Buku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.pinjam')); ?>">Peminjaman</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
                  </li>
                </ul>
              </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="NIP">
            </div>
            <div class="col-lg-6 mb-4">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="NIDN">
            </div>
            <div class="col-lg-6 mb-4">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama">
            </div>
            <div class="col-lg-6 mb-4">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Program Study">
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\KSI5A-THORIQ-PROJECT\profilKSI\resources\views/input/lecturer.blade.php ENDPATH**/ ?>