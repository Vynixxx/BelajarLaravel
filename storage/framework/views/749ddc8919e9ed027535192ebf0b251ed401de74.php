<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Peminjaman</title>
</head>

<body>
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
                    <a class="nav-link" href="<?php echo e(route('input.lecturer')); ?>">Dosen & Lulusan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.buku')); ?>">Buku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('admin.pinjam')); ?>">Peminjaman</a>
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
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <h5>
                                <a class="nav-link" aria-current=" page" href="<?php echo e(route('admin.home')); ?>">Home</a>
                            </h5>
                        </li>
                        <li class="nav-item" style="margin-left: 30px">
                            <h5>
                                <a class="nav-link" aria-current="page" href="<?php echo e(route('admin.buku')); ?>">Buku</a>
                            </h5>
                        </li>
                        <li class="nav-item" style="margin-left: 30px">
                            <h5>
                                <a class="nav-link active" aria-current=" page" href="<?php echo e(route('admin.pinjam')); ?>">Peminjaman</a>
                            </h5>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container mt-3">
            <?php if(Session::get('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> <?php echo e(Session::get('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <?php if(Session::get('failed')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> <?php echo e(Session::get('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
        </div>
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-6">
                <form action="<?php echo e(route('admin.pinjam')); ?>" method="GET">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari nama buku" aria-label="Search" aria-describedby="searchaddon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col-2">
                <a class="btn btn-success" href="<?php echo e(route('admin.tambahPinjam')); ?>" style="text-decoration: none; margin-left: 30px">Tambah Data +</a>
            </div>
        </div>
        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Kode User</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $peminjamen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><?php echo e($index + $data->firstItem()); ?></td>
                    <td><?php echo e($peminjamen->tanggal_pinjam); ?></td>
                    <td><?php echo e($peminjamen->tanggal_kembali); ?></td>
                    <td><?php echo e($peminjamen->id_buku); ?></td>
                    <td><?php echo e($peminjamen->id_user); ?></td>
                    <td> <span class="<?php echo e($peminjamen->status === 'Sudah Dikembalikan' ? 'fw-semibold text-success' : 'fw-semibold text-danger'); ?>">
                        <?php echo e($peminjamen->status); ?> </span> </td>
                    <td>
                        <a class="btn btn-outline-primary" href="/admin/detail_peminjaman/<?php echo e($peminjamen->id); ?>/<?php echo e($peminjamen->id_user); ?>/<?php echo e($peminjamen->id_buku); ?>">Detail</a>
                        <a class="btn btn-outline-warning" href="/admin/editPinjam/<?php echo e($peminjamen->id); ?>">Edit</a>
                        <a class="btn btn-outline-danger" href="/admin/deletePinjam/<?php echo e($peminjamen->id); ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table><br>
        <?php echo e($data->links()); ?>

    </div><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\KSI5A-THORIQ-PROJECT\profilKSI\resources\views/admin/pinjam.blade.php ENDPATH**/ ?>