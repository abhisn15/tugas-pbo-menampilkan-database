<?php
// include 'dbcontroller.php';
require_once('dbcontroller.php');
$db = new dbController();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62969761faada80019c4386c&product=inline-share-buttons' async='async'></script>
    <link rel="icon" href="https://smknegeri40-jkt.sch.id/wp-content/uploads/2023/07/Logo_SMK_Negeri_40_Jakarta-150x150.png" sizes="32x32" />
    <link rel="icon" href="https://smknegeri40-jkt.sch.id/wp-content/uploads/2023/07/Logo_SMK_Negeri_40_Jakarta.png" sizes="192x192" />
    <title>Tugas PBO</title>
</head>

<body>
    <!-- Navbar -->
    <div class="fixed-top bg-dark" style="height: 64px;" data-aos="fade-down" data-aos-duration="1000">
        <nav class="navbar container navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SMKN 40 JAKARTA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-black" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kelas">Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jurusan">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#guru">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#siswa">Siswa</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <hr style="position: relative; bottom: 10px;">
    </div>
    <!-- Akhir Navbar -->

    <!-- Banner -->
    <div class="banner-container d-flex justify-content-center">
        <figure>
            <img class="img-fluid grayscale" src="img/smkn40.jpeg" alt="Banner">
            <figcaption>
                <h3 class="text-white" id="element">
                </h3>
            </figcaption>
        </figure>
    </div>

    <!-- Cards -->
    <div class="container" id="kelas">
        <button title="Back To Top" class="btnScrollToTop bg-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg>
        </button>
        <h1 class="text-center text-center mb-5 mt-3">Kelas</h1>
        <div class="row text-center justify-content-center">

            <?php
            $sql = "select * from t_kelas";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

                <div class="card-all col-md-4 col-xl-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
                    <div class="card" style="width: 18rem;">
                        <img src="img/kelas/<?php echo $value['f_nama']; ?>.png" class="card-img-top" alt="Kelas">
                        <div class="card-body bg-dark">
                            <h5 class="card-title text-white">

                                <?php echo $value['f_nama']; ?>

                            </h5>
                        </div>
                    </div>
                </div>

            <?php
            endforeach
            ?>
        </div>
    </div>

    <div class="container" id="jurusan">
        <h1 class="text-center text-center mb-5 mt-3">Jurusan</h1>
        <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="false" data-aos-anchor-placement="top-center">

            <?php
            $sql = "select * from t_jurusan";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

                <div class="card-all col-md-4 col-xl-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/jurusan/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Jurusan">
                        <div class="card-body bg-dark">
                            <h5 class="card-title text-white">

                                <?php echo $value['f_nama']; ?>

                            </h5>
                            <p class="card-text" style="font-size: 14px; color: #D9D9D9;">
                                <?php echo $value['f_deskripsi']; ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php
            endforeach
            ?>
        </div>

        <div class="container" id="guru">
            <h1 class="text-center text-center mb-5 mt-3">Guru</h1>
            <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="false" data-aos-anchor-placement="top-center">

                <?php
                $sql = "select * from t_guru";
                $row = $db->getALL($sql);
                foreach ($row as $value) :
                ?>

                    <div class="card-all col-md-4 col-xl-6 mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/guru/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Guru">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-white">

                                    <?php echo $value['f_nama']; ?>

                                </h5>
                            </div>
                        </div>
                    </div>

                <?php
                endforeach
                ?>
            </div>

            <div class="container" id="siswa">
                <h1 class="text-center text-center mb-5 mt-3">Siswa</h1>
                <div class="row text-center justify-content-center">

                    <?php
                    // Menggunakan PDO untuk menghubungkan ke database
                    $db = new PDO("mysql:host=localhost;dbname=sekolah", "root", "");

                    // Kueri SQL dengan JOIN untuk mengambil data siswa, nama kelas, dan nama jurusan
                    $sql = "SELECT t_siswa.f_nama, t_kelas.f_nama AS f_idkelas, t_jurusan.f_nama AS f_idjurusan
                        FROM t_siswa
                        INNER JOIN t_kelas ON t_siswa.f_idkelas = t_kelas.f_idkelas
                        INNER JOIN t_jurusan ON t_siswa.f_idjurusan = t_jurusan.f_idjurusan";

                    $result = $db->query($sql);

                    foreach ($result as $row) :
                    ?>

                        <div class="card-all col-md-4 col-xl-4 mb-5" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card" style="width: 18rem;">
                                <img src="img/siswa/<?php echo $row['f_nama']; ?>.jpg" class="card-img-top" alt="Siswa">
                                <div class="card-body bg-dark">
                                    <h5 class="card-title text-white">
                                        <?php echo $row['f_nama']; ?>
                                    </h5>
                                    <span>Kelas: <?php echo $row['f_idkelas']; ?></span>
                                    <p>Jurusan: <?php echo $row['f_idjurusan']; ?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#D9D9D9" fill-opacity="1" d="M0,160L26.7,181.3C53.3,203,107,245,160,261.3C213.3,277,267,267,320,266.7C373.3,267,427,277,480,245.3C533.3,213,587,139,640,128C693.3,117,747,171,800,197.3C853.3,224,907,224,960,213.3C1013.3,203,1067,181,1120,170.7C1173.3,160,1227,160,1280,138.7C1333.3,117,1387,75,1413,53.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
    <footer class="text-dark text-center mt-25" style="background: #D9D9D9;">
        <p>
            <a href="https://www.instagram.com/abhisn_gaming/" target="_blank" class="text-dark text-decoration-none fw-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram mb-1" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
            </a>
            Created by Abhi &copy;CopyRight
        </p>
    </footer>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        var typed = new Typed('#element', {
            strings: ['Tugas Menampilkan Data Kelas, Jurusan, Guru, dan Siswa dari Database'],
            typeSpeed: 50,
            showCursor: true, // Sembunyikan kursor
            loop: true // Ulangi animasi
        });
        const btnScrollToTop = document.querySelector(".btnScrollToTop");

        btnScrollToTop.addEventListener("click", function() {
            window.scrollTo(0, 0);
        });
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                btnScrollToTop.classList.add("active");
            } else {
                btnScrollToTop.classList.remove("active");
            }
        })
        AOS.init();
    </script>
    <!-- Akhir Cards -->
</body>

</html>