<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">    
    <title>Edit Data Peminjaman</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
        </div>
    </nav>
    <div class="container">
        <a href="<?php echo e(route('admin.pinjam')); ?>">
            <i class="bi-arrow-left h1"></i>
        </a>
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
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Data Peminjaman</h5>
                        <form action="/postEditPinjam/<?php echo e($data->id); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Tanggal Peminjaman</label>
                                <input type="text" class="form-control border border-secondary form-control" name="tanggalPinjam" required value="<?php echo e($data->tanggal_pinjam); ?>">
                                <span class="text-danger">
                                    <?php $__errorArgs = ['tanggalPinjam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Tanggal Kembali</label>
                                <input type="text" class="form-control border border-secondary form-control" name="tanggalKembali" required value="<?php echo e($data->tanggal_kembali); ?>">
                                <span class="text-danger">
                                    <?php $__errorArgs = ['tanggalKembali'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Kode Buku</label>
                                <input type="text" class="form-control border border-secondary form-control" name="kodeBuku" required value="<?php echo e($data->id_buku); ?>">
                                <span class="text-danger">
                                    <?php $__errorArgs = ['kodeBuku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Kode User</label>
                                <input type="text" class="form-control border border-secondary form-control" name="idUser" required value="<?php echo e($data->id_user); ?>">
                                <span class="text-danger">
                                    <?php $__errorArgs = ['idUser'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div><br>
                            <div class="form-group mt-1"> <label class="text-secondary">Status Pengembalian</label><br>
                                <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="status" value="Belum Dikembalikan" <?php if($data->status == 'Belum Dikembalikan'): ?> checked <?php endif; ?>> <label class="form-check-label" for="inlineRadio1">Belum Dikembalikan</label> </div>
                                <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="status" value="Sudah Dikembalikan" <?php if($data->status == 'Sudah Dikembalikan'): ?> checked <?php endif; ?>> <label class="form-check-label" for="inlineRadio2">Sudah Dikembalikan</label> </div>
                            </div><br>
                            <button type="submit" class="btn btn-success mt-5">Update Data Peminjaman</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html<?php /**PATH C:\xampp\htdocs\KSI5A-THORIQ-PROJECT\profilKSI\resources\views/admin/editPinjam.blade.php ENDPATH**/ ?>