<?php
$anggotaTim = [
    [
        'name' => 'Dedy Tigor Manurung',
        'title' => 'Testing and Database',
        'image' => 'images/dedy.jpeg',
        'nim' => '2311103138',
        'kelas' => 'SI07-E',
        'email' => '2311103138@ittelkom-pwt.ac.id'
    ],
    [
        'name' => 'Jaiz Cahya Prasetya',
        'title' => 'Backend Developer',
        'image' => 'images/jaizz.jpg',
        'nim' => '2311103059',
        'kelas' => 'SI07-E',
        'email' => '2311103059@ittelkom-pwt.ac.id'
    ],
    [
        'name' => 'Meiwildan Muhammad Farrel',
        'title' => 'UI/UX Designer and Server',
        'image' => 'images/farrel.jpg',
        'nim' => '2311103073',
        'kelas' => 'SI07-E',
        'email' => '2311103073@ittelkom-pwt.ac.id'
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
                <?php foreach ($anggotaTim as $anggota) : ?>
                <div class="column">
                    <div class="card">
                        <img src="<?php echo $anggota['image']; ?>" alt="<?php echo $anggota['name']; ?>" style="width:100%">
                        <div class="container">
                            <h2><?php echo $anggota['name']; ?></h2>
                            <h3 class="title"><?php echo $anggota['title']; ?></h3>
                            <p><button onclick="tampilAnggota('<?php echo $anggota['name']; ?>', '<?php echo $anggota['nim']; ?>', '<?php echo $anggota['kelas']; ?>', '<?php echo $anggota['email']; ?>')" class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

</body>

</html>