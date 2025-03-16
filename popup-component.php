<?php

/**
 * Function untuk menampilkan informasi anggota tim dalam popup
 * @param array $data
 * @return string
 */
function renderTeamMemberInfo($data)
{
    if (empty($data)) {
        return '<p>' . $data['job'] . '</p>';
    }

    $html = '<div class="team-info">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">NIM</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . $data['nim'] . '</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Kelas</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . $data['kelas'] . '</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Email</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . $data['email'] . '</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Peran</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . $data['job'] . '</td>
            </tr>
        </table>
    </div>';

    return $html;
}

/**
 * Function untuk menampilkan form pesan tiket
 * @return string
 */
function renderTicketForm()
{
    return '<form method="post" action="" class="ticket-form">
        <div class="form-group">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">No. Telepon:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="date">Tanggal Kunjungan:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="visitors">Jumlah Pengunjung:</label>
            <input type="number" id="visitors" name="visitors" min="1" max="10" required>
        </div>
        <input type="hidden" name="action" value="confirmAction">
        <button type="submit" class="popup-btn submit-btn">Pesan Tiket</button>
    </form>';
}
?>

<div class="popup-container" id="popupContainer" <?php if ($show) echo 'style="display: flex;"'; ?>>
    <div class="popup">
        <div class="popup-header">
            <h3 class="popup-title"><?php echo $title; ?></h3>
            <button class="close-btn" onclick="closePopup()">&times;</button>
        </div>
        <div class="popup-content">
            <?php if (!empty($member) && isset($nim) && isset($kelas) && isset($email)): ?>
                <?php
                $memberData = [
                    'nim' => $nim,
                    'kelas' => $kelas,
                    'email' => $email,
                    'job' => $job
                ];
                echo renderTeamMemberInfo($memberData);
                ?>
            <?php elseif ($title === "Informasi Pesan Tiket"): ?>
                <?php echo renderTicketForm(); ?>
            <?php else: ?>
                <p><?php echo $job; ?></p>
            <?php endif; ?>
        </div>
        <div class="popup-footer">
            <button type="button" class="popup-btn" onclick="closePopup()">Tutup</button>
        </div>
    </div>
</div>