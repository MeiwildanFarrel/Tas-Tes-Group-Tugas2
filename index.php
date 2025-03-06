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
        function myFunction() {
            Swal.fire({
                title: 'Meiwildan Muhammad Farrel',
                html: "<p>NIM: 2311103073</p><p>Kelas: SI07-E</p><p>Email:2311103073@ittelkom-pwt.ac.id</p>",
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Close'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("demo").innerHTML = "You pressed OK!";
                } else {
                    document.getElementById("demo").innerHTML = "You pressed Cancel!";
                }
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
                <button onclick="myFunction()">Pesan Tiket</button>
                <button onclick="myFunction()">Lihat Sejarah</button>
            </div>

        </section>

        <section class="team-section">
            <h2>Meet The Team</h2>
            <p>Kelompok Tugas Besar Pemrograman Aplikasi Web</p>
            <br>

            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="images/farrel.jpg" alt="Farrel" style="width:100%">
                        <div class="container">
                            <h2>Meiwildan Muhammad Farrel</h2>
                            <h3 class="title">UI/UX and Server</h3>

                            <p><button onclick="myFunction()" class="button">Contact</button></p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="" alt="Mike" style="width:100%">
                        <div class="container">
                            <h2>Mike Ross</h2>
                            <p class="title">Art Director</p>

                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="" alt="John" style="width:100%">
                        <div class="container">
                            <h2>John Doe</h2>
                            <p class="title">Designer</p>
                            <p><button class="button">Jobdesk</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</body>

</html>