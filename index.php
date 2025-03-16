<?php
$anggotaTim = [
    [
        'name' => 'Meiwildan Muhammad Farrel',
        'title' => 'UI/UX and Server',
        'image' => 'images/farrel.jpg',
        'nim' => '2311103073',
        'kelas' => 'SI07-E',
        'email' => '2311103073@ittelkom-pwt.ac.id'
    ],
    [
        'name' => 'Mike Ross',
        'title' => 'Art Director',
        'image' => 'images/mike.jpg',
        'nim' => '2311103074',
        'kelas' => 'SI07-E',
        'email' => '2311103074@ittelkom-pwt.ac.id'
    ],
    [
        'name' => 'John Doe',
        'title' => 'Designer',
        'image' => 'images/john.jpg',
        'nim' => '2311103075',
        'kelas' => 'SI07-E',
        'email' => '2311103075@ittelkom-pwt.ac.id'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menara Pandang Teratai</title>
    <link rel="stylesheet" href="styles.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function tampilAnggota(name, nim, kelas, email) {
            Swal.fire({
                title: name,
                html: "<p>NIM: " + nim + "</p><p>Kelas: " + kelas + "</p><p>Email: " + email + "</p>",
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Close'
            });
        }

        function tampilTiket() {
            Swal.fire({
                title: 'Pesan Tiket',
                html: "<p>Harga tiket: Rp30.000/orang</p><p>Jam operasional: 08.00 - 21.00 WIB</p>",
                showCancelButton: true,
                confirmButtonText: 'Pesan',
                cancelButtonText: 'Batal'
            });
        }

        function tampilRiwayat() {
            Swal.fire({
                title: 'Sejarah Menara Pandang Teratai',
                html: "<p>Dibangun pada tahun 2022, Menara Pandang Teratai merupakan ikon baru kota Purwokerto yang menjadi destinasi wisata favorit.</p>",
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Close'
            });
        }
    </script>
</head>

<body>

    <header class="header">
        <img class="logo-nav" src="logo.png" alt="logo menara">
        <h2>Menara Pandang Teratai</h2>
        <nav class="navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Pesan Tiket</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>Selamat datang di Menara Pandang Teratai</h1>
                <p>Tinggi menara teratai yaitu 114m, terletak di pusat kota Purwokerto. Menikmati
                    keindahan kota Purwokerto di monumen tertinggi kota satria.</p>
            </div>
            <div class="hero-buttons">
                <button onclick="tampilTiket()">Pesan Tiket</button>
                <button onclick="tampilRiwayat()">Lihat Sejarah</button>
            </div>
        </section>

        <section class="team-section">
            <h2>Meet The Team</h2>
            <p>Kelompok Tugas Besar Pemrograman Aplikasi Web</p>
            <br>

            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="<?php echo $anggotaTim[0]['image']; ?>" alt="<?php echo $anggotaTim[0]['name']; ?>" style="width:100%">
                        <div class="container">
                            <h2><?php echo $anggotaTim[0]['name']; ?></h2>
                            <h3 class="title"><?php echo $anggotaTim[0]['title']; ?></h3>
                            <p><button onclick="tampilAnggota('<?php echo $anggotaTim[0]['name']; ?>', '<?php echo $anggotaTim[0]['nim']; ?>', '<?php echo $anggotaTim[0]['kelas']; ?>', '<?php echo $anggotaTim[0]['email']; ?>')" class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="<?php echo $anggotaTim[1]['image']; ?>" alt="<?php echo $anggotaTim[1]['name']; ?>" style="width:100%">
                        <div class="container">
                            <h2><?php echo $anggotaTim[1]['name']; ?></h2>
                            <h3 class="title"><?php echo $anggotaTim[1]['title']; ?></h3>
                            <p><button onclick="tampilAnggota('<?php echo $anggotaTim[1]['name']; ?>', '<?php echo $anggotaTim[1]['nim']; ?>', '<?php echo $anggotaTim[1]['kelas']; ?>', '<?php echo $anggotaTim[1]['email']; ?>')" class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="<?php echo $anggotaTim[2]['image']; ?>" alt="<?php echo $anggotaTim[2]['name']; ?>" style="width:100%">
                        <div class="container">
                            <h2><?php echo $anggotaTim[2]['name']; ?></h2>
                            <h3 class="title"><?php echo $anggotaTim[2]['title']; ?></h3>
                            <p><button onclick="tampilAnggota('<?php echo $anggotaTim[2]['name']; ?>', '<?php echo $anggotaTim[2]['nim']; ?>', '<?php echo $anggotaTim[2]['kelas']; ?>', '<?php echo $anggotaTim[2]['email']; ?>')" class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>