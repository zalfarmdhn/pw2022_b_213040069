<?php
require 'functions_kuliah.php';

$id = $_GET["id"];
if (isset($_POST["hapus"])) {
    if (hapus($id) > 0) {
        echo "  <script>
                    alert('data berhasil dihapus!'); 
                    document.location.href = 'index.php';       
                </script>";
    }
}
