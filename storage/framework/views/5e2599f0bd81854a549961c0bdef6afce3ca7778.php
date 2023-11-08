<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>KSI Lecturer</title>
</head>
<body>
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
            <a class="nav-link" href="<?php echo e(route('news')); ?>">KSI News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('profileksi')); ?>">KSI Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="<?php echo e(route('lecturerksi')); ?>">KSI Lecturer</a>
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
    <article class="single-post">
            <div class="post-heading">
              <h2 class="post-title mb-3">Data Dosen Jurusan Teknik Informatika</h2>
            </div>
            <div class="post-content">
              <table class="table">
                <tbody><tr class="bg-primary text-white">
                  <td class="bg-primary text-white" style="width:5%;">NO</td>
                  <td style="width:20%;">NIP / NIK</td>
                  <td style="width:25%;">Nama</td>
                  <td style="width:15%;">NIDN</td>
                  <td style="width:35%;">Program Studi</td>
                </tr>
                </tbody><tbody>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">1</td>
                    <td style="vertical-align: middle;">12002164</td>
                    <td style="vertical-align: middle;">Eva Kurniawaty, M.Kom</td>
                    <td style="vertical-align: middle;">9900008796</td>
                    <td style="vertical-align: middle;">D2 Jalur Cepat Administrasi Jaringan Komputer</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">2</td>
                    <td style="vertical-align: middle;">12002161</td>
                    <td style="vertical-align: middle;">Muhammad Ridho Nosa, S.T., M.Kom</td>
                    <td style="vertical-align: middle;"> 9900008798</td>
                    <td style="vertical-align: middle;">D2 Jalur Cepat Administrasi Jaringan Komputer</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">3</td>
                    <td style="vertical-align: middle;">12002162</td>
                    <td style="vertical-align: middle;">Niky Hardinata, M.Kom</td>
                    <td style="vertical-align: middle;"> 9900008809</td>
                    <td style="vertical-align: middle;">D2 Jalur Cepat Administrasi Jaringan Komputer</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">4</td>
                    <td style="vertical-align: middle;">198712092019031010</td>
                    <td style="vertical-align: middle;">Desi Amirullah, M.T</td>
                    <td style="vertical-align: middle;">0009128701</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">5</td>
                    <td style="vertical-align: middle;">198512302019031006</td>
                    <td style="vertical-align: middle;">Eko Prayitno, M.Kom</td>
                    <td style="vertical-align: middle;">1030128502</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">6</td>
                    <td style="vertical-align: middle;">198708122019031010</td>
                    <td style="vertical-align: middle;">Lipantri Mashur Gultom, M.Kom</td>
                    <td style="vertical-align: middle;">0112088701</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">7</td>
                    <td style="vertical-align: middle;">198611062019031006</td>
                    <td style="vertical-align: middle;">Muhammad Nasir, M.Kom</td>
                    <td style="vertical-align: middle;">0006118604</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">8</td>
                    <td style="vertical-align: middle;">1200146</td>
                    <td style="vertical-align: middle;">Nurul Fahmi, M.T</td>
                    <td style="vertical-align: middle;">0031018901</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">9</td>
                    <td style="vertical-align: middle;">197912172021212008</td>
                    <td style="vertical-align: middle;">Sri Mawarni, M.Si</td>
                    <td style="vertical-align: middle;">1017127901</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">10</td>
                    <td style="vertical-align: middle;">198708122019031011</td>
                    <td style="vertical-align: middle;">Supria, M.Kom</td>
                    <td style="vertical-align: middle;">0012088702</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">11</td>
                    <td style="vertical-align: middle;">1200145</td>
                    <td style="vertical-align: middle;">Tengku Musri, M.Kom</td>
                    <td style="vertical-align: middle;">0008038502</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">12</td>
                    <td style="vertical-align: middle;">198911262020121006</td>
                    <td style="vertical-align: middle;">Wahyat, M.Kom</td>
                    <td style="vertical-align: middle;">0026118904</td>
                    <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">13</td>
                    <td style="vertical-align: middle;">198209192021211003</td>
                    <td style="vertical-align: middle;"> 	Mansur, M.Kom</td>
                    <td style="vertical-align: middle;">1019098203</td>
                    <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">14</td>
                    <td style="vertical-align: middle;">198510052015041001 	</td>
                    <td style="vertical-align: middle;">Agus Tedyyana, M.Kom</td>
                    <td style="vertical-align: middle;">0005108501</td>
                    <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">15</td>
                    <td style="vertical-align: middle;">198508122014041001</td>
                    <td style="vertical-align: middle;">Danuri, M.Cs</td>
                    <td style="vertical-align: middle;">1012088501</td>
                    <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">16</td>
                    <td style="vertical-align: middle;">199005222019031010</td>
                    <td style="vertical-align: middle;">Depandi Enda, M.Kom</td>
                    <td style="vertical-align: middle;">0022059004</td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">17</td>
                    <td style="vertical-align: middle;">198705092022032004</td>
                    <td style="vertical-align: middle;">Elvi Rahmi, S.T., M.Kom</td>
                    <td style="vertical-align: middle;"> </td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">18</td>
                    <td style="vertical-align: middle;">198904182022032008</td>
                    <td style="vertical-align: middle;">Eva Yumami, S.Kom., M.T</td>
                    <td style="vertical-align: middle;"> </td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">19</td>
                    <td style="vertical-align: middle;">198312122019032011</td>
                    <td style="vertical-align: middle;">Fajar Ratnawati, M.Cs</td>
                    <td style="vertical-align: middle;">0012128304</td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">20</td>
                    <td style="vertical-align: middle;">198805072015041003</td>
                    <td style="vertical-align: middle;">Fajri Profesio Putra, M.Cs</td>
                    <td style="vertical-align: middle;">0007058802</td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">21</td>
                    <td style="vertical-align: middle;">198611072015041002 	</td>
                    <td style="vertical-align: middle;">Jaroji, M.Kom</td>
                    <td style="vertical-align: middle;">0007118603</td>
                    <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">22</td>
                    <td style="vertical-align: middle;">197706072014041001</td>
                    <td style="vertical-align: middle;">Kasmawi, M.Kom</td>
                    <td style="vertical-align: middle;">1007067701</td>
                    <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">23</td>
                    <td style="vertical-align: middle;">198908222014042001</td>
                    <td style="vertical-align: middle;">Lidya Wati, M.kom</td>
                    <td style="vertical-align: middle;">0022088902 	</td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">24</td>
                    <td style="vertical-align: middle;">199212092022031006</td>
                    <td style="vertical-align: middle;">Muhammad Asep Subandri, M.Kom</td>
                    <td style="vertical-align: middle;">9900007396</td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">25</td>
                    <td style="vertical-align: middle;">199109012022032006</td>
                    <td style="vertical-align: middle;">Nurmi Hidayasari, ST., M.Kom</td>
                    <td style="vertical-align: middle;"> 0001099105</td>
                    <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">26</td>
                    <td style="vertical-align: middle;">198306162018032001</td>
                    <td style="vertical-align: middle;">Rezki Kurniati, M.Kom</td>
                    <td style="vertical-align: middle;">1016068303</td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                    <tr>
                    <td style="vertical-align: middle; text-align:center;">27</td>
                    <td style="vertical-align: middle;">199107112020122022</td>
                    <td style="vertical-align: middle;">Ryci Rahmatil Fiska, M.Kom</td>
                    <td style="vertical-align: middle;">1011079101</td>
                    <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                  </tr>
                                  </tbody>

              </table>
            </div>

          </article>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\KSI5A-THORIQ-PROJECT\profilKSI\resources\views/lecturerksi.blade.php ENDPATH**/ ?>