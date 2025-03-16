<?php
include 'popup-handler.php';

/**
 * Function untuk membuat kartu anggota tim
 * @param string $id
 * @param array $data
 * @return string
 */
function createTeamCard($id, $data)
{
    return '<div class="column">
        <div class="card">
            <img src="' . $data['image'] . '" alt="' . $data['name'] . '" style="width:100%; height:300px;">
            <div class="container">
                <h3>' . $data['name'] . '</h3>
                <p class="title">' . $data['job'] . '</p>
                <p>
                <form method="post" action="">
                    <input type="hidden" name="action" value="showPopup">
                    <input type="hidden" name="member" value="' . $id . '">
                    <button type="submit" class="show-popup-button">More Details</button>
                </form>
                </p>
            </div>
        </div>
    </div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menara Pandang Teratai</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="header">
        <img class="logo-nav" src="logo.png" alt="logo menara">
        <h2>Menara Pandang Teratai</h2>
        <nav class="navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Pesan Tiket</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Kontak</a></li>
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
                <form method="post" action="">
                    <input type="hidden" name="action" value="showPopup">
                    <button type="submit">Pesan Tiket</button>
                </form>
                <button>Lihat Sejarah</button>
            </div>
        </section>

        <section class="team-section">
            <h2>Meet The Team</h2>
            <p>Kelompok Tugas Besar Pemrograman Aplikasi Web</p>
            <br>

            <div class="row">
                <?php
                foreach ($teamMembers as $id => $member) {
                    echo createTeamCard($id, $member);
                }
                ?>
            </div>
        </section>

        <?php
        include 'popup-component.php';
        ?>

    </main>

    <script>
        function closePopup() {
            document.getElementById('popupContainer').style.display = 'none';
        }
    </script>
</body>

</html>