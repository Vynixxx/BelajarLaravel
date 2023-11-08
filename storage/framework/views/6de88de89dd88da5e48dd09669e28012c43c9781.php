<!DOCTYPE html>
<html lang=en>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Homepage</title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(route('user.home')); ?>">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('user.home')); ?>">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('news')); ?>">KSI News</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('profileksi')); ?>">KSI Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('lecturerksi')); ?>">KSI Lecturer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
                      </li>
                    </ul>
                  </div>
            </div>
        </nav>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h4 class="text-secondary">Selamat Datang <?php echo e(Auth::user()->name); ?></h4>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row mt-5 mb-5">
          <div class="col"></div>
          <div class="col-6">
            <form action="" method="GET">
              <?php echo csrf_field(); ?>
              <div class="input-group">
                <input type="search" name="search" class="form-control rounded" placeholder="Cari nama Buku" aria-label="Search" aria-describedby="search-addon"/>
                <button type="submit" class="btn btn-outline-primary">Search</button>
              </div>
            </form>
          </div>
          <div class="col"></div>
        </div>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bukus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-2"><img style="width: 150px" src="<?php echo e(asset('image/' . $bukus->gambar)); ?>" alt="Cover buku"></div>
              <div class="col-2">
                <p class="fw-bold">Judul</p>
                <p class="fw-bold">Penulis</p>
                <p class="fw-bold">Penerbit</p>
                <p class="fw-bold">Tahun Terbit</p>
                <p class="fw-bold">Deskripsi Buku</p>
              </div>
              <div class="col-8">
                <p><?php echo e($bukus->judul_buku); ?></p>
                <p><?php echo e($bukus->penulis); ?></p>
                <p><?php echo e($bukus->penerbit); ?></p>
                <p><?php echo e($bukus->tahun_terbit); ?></p>
                <p><?php echo e($bukus->deskripsi); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($data->links()); ?>

        </div>
      </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\KSI5A-THORIQ-PROJECT\profilKSI\resources\views/user/home.blade.php ENDPATH**/ ?>