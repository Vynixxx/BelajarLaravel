<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>KSI Profile</title>
</head>
<body oncontextmenu = "return false" oncopy="return false" oncut="return false" onpaste="return false">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.home') }}">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem informasi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('user.home') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">KSI News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="{{ route('profileksi') }}">KSI Profile</a>
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
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">KSI Profile</li>
        </ol>
    </nav>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card-body">
              <h5 class="card-title mb-2">Visi</h5>
              <p class="card-text">Program studi ini yang menawarkan program pendidikan tingkat sarjana yang fokus pada penerapan praktis dalam bidang keamanan informasi. Ini mencerminkan pendekatan yang kuat terhadap pemahaman teori dan keterampilan praktis yang relevan dengan kebutuhan industri.<br>

              Kata Unggul Mengacu pada standar keunggulan akademik dan kualitas program studi dalam memberikan pendidikan dan pelatihan di bidang keamanan informasi. Program ini bertujuan untuk menjadi yang terdepan dan diakui secara luas dalam lingkup Provinsi Riau.<br>
                
              Bidang keilmuan Keamanan Informasi merujuk pada spesialisasi dalam keamanan sistem informasi, perlindungan data, dan mitigasi risiko terkait keamanan informasi. Program studi ini akan mengajarkan pengetahuan dan keterampilan yang diperlukan untuk melindungi informasi sensitif dan menghadapi ancaman keamanan siber.</p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
              <h5 class="card-title mb-2">Misi</h5>
              <p class="card-text">Untuk dapat merealisasikan Visi yang telah ditetapkan tersebut, Prodi Sarjana Terapan KSI menetapkan Misi, sebagai berikut:<br>
                - Menyelenggarakan pendidikan vokasi berkualitas yang berfokus dibidang keamanan informasi, dengan kurikulum yang komprehensif dan relevan, untuk mempersiapkan mahasiswa yang professional dan berkualitas untuk menghadapi tantangan global<br>
                - Membangun budaya akademik dan organisasi yang berkarakter dan bermartabat dengan menjunjung tinggi etika professional kepada Mahasiswa<br>
                - Melakukan  penelitian terapan dan inovasi dibidang keamanan informasi untuk menghasilkan kontribusi dalam pemecahan masalah keamanan informasi sesuai dengan kebutuhan masyarakat dan industry.<br>
                Mengembangkan kemitraan dengan industri dan lembaga terkait untuk memperkaya pengalaman mahasiswa dan mendorong adopsi solusi keamanan yang efektif.<br>
                - Melakukan program pengabdian pada masyrakat untuk menghasilkan karya yang dapat diaplikasikan untuk menyelesaikan permasalahan yang terjadi di masyarakat dan industry.</p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
              <h5 class="card-title mb-2">Sasaran</h5>
              <p class="card-text">Sasaran yang hendak dicapai oleh Program Studi dalam rangka mewujudkan visi dan tujuan adalah sebagai berikut:<br>

                1. Sasaran dari tujuan menghasilkan lulusan berkualitas yang memiliki pengetahuan dan keterampilan unggul dalam bidang keamanan informasi, siap untuk menghadapi tantangan dan tuntutan industri dan lingkungan global yaitu:
                <br>
                Meningkatkan mutu dan relevansi kurikulum keamanan informasi untuk mencerminkan perkembangan terkini dalam teknologi dan tuntutan industri.<br>
                Memperkuat pelatihan keterampilan praktis dan penerapan pengetahuan dalam situasi dunia nyata melalui magang dan proyek-proyek keamanan informasi.<br>
                Menyediakan kesempatan bagi mahasiswa untuk mengembangkan kompetensi bahasa asing dan soft skills yang dibutuhkan dalam lingkungan kerja global.<br>
                Melakukan evaluasi dan perbaikan secara berkala untuk memastikan lulusan dapat memenuhi kebutuhan industri dan tuntutan lingkungan kerja global.<br>
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
              <h5 class="card-title mb-2">Profil Lulusan</h5>
              <p class="card-text">
                - Lulusan memiliki kemampuan mengembangkan rencana dan kebijakan keamanan informasi serta memiliki kemampuan menguji, analisis dan menilai potensi risiko keamanan informasi pada sistem informasi beserta perangkat pendukungnya untuk memastikan kerahasiaan, integritas, dan ketersediaan informasi yang dimiliki oleh organisasi.
                <br>
                - Lulusan memiliki kemampuan menganalisis, merancang, membangun dan menguji dan mengimplementasikan sistem informasi sesuai dengan tujuan organisasi
                <br>
                - Lulusan memiliki kemampuan merancang jaringan komputer, mengimplementasikan, mengelola dan mengujinya sesuai dengan prinsip keamanan informasi untuk melindungan aset informasi yang dimiliki oleh organisasi
                <br>
                - Lulusan memiliki kemampuan etika profesionalitas, integritas, jujur dan bertanggung jawab terhadap peran yang diemban
                <br>
                - Lulusan memiliki kemampuan kerja tim, kepemimpinan, berfikir kritis, komunikasi, dan kolaborasi serta jiwa enterpreneurship</p>
            </div>
        </div>
    </div>
    <center>
       <div class="col mt-5 mb-5">
         <div class="card-body">
            <h5 class="card-title mb-2">Prospek Lulusan :<h5>
               <p class="card-text">
                    - Information Security Risk Analyst -<br>
                    - Network Security Analyst -<br>
                    - Network Security Administrator -<br>
                    - Network Designer -<br>
                    - Information System Security Engineer -<br>
                    - Application Developer -<br>
                    - Application Security Tester -<br>
                    - System Analyst and Design -<br>
                    - Database Administrators -<br>
                    - Technopreneur -</p>
              </div>
          </div>
      </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>