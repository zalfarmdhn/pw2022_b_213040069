<?php
require '../functions.php';
// Mengecek session dan login admin atau user
checkLoginAdmin();

if (hapusAnime($_GET["id"]) > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'anime.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'anime.php';
            </script>
        ";
}
