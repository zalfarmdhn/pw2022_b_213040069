<?php
require '../functions.php';
session_start();
// Mengecek session dan login admin atau user
checkLoginAdmin();

if (hapusAdmin($_GET["id"]) > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'admin.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'admin.php';
            </script>
        ";
}
