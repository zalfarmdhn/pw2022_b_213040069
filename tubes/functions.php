<?php
function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'punime-db') or die('KONEKSI GAGAL');
    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahAnime($data)
{
    $conn = koneksi();
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama_anime"]);
    $nama_alt = htmlspecialchars($data["nama_alternatif"]);
    $deskripsi = $data["deskripsi"];
    $studio = htmlspecialchars($data["studio"]);
    $episode = htmlspecialchars($data["episode"]);
    $status = htmlspecialchars($data["status_anime"]);
    $rilis = htmlspecialchars($data["rilis"]);
    $genres = htmlspecialchars($data["genre"]);

    // upload gambar
    $poster = upload();
    if (!$poster) {
        return false;
    }


    // query insert data
    $query =    "   INSERT INTO anime
                    VALUES
                    ('', '$poster', '$nama', '$nama_alt',  '$deskripsi', '$studio', '$episode', '$status', '$rilis', '$genres')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn) or die(mysqli_error($conn));
}

function tambahKategori($data)
{
    $conn = koneksi();

    $kategori = htmlspecialchars($data["genre"]);
    $query = "  INSERT INTO kategori 
                VALUES 
                ('', '$kategori')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['poster_anime']['name'];
    $ukuranFile = $_FILES['poster_anime']['size'];
    $error = $_FILES['poster_anime']['error'];
    $tmpName = $_FILES['poster_anime']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload 
    if ($error === 4) {
        echo "  <script>
                    alert('Pilih gambar!');    
                </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "  <script>
                    alert('Yang anda upload bukan gambar!');    
                </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "  <script>
                    alert('Ukuran Gambar terlalu Besar!');    
                </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapusAnime($id)
{
    $conn = koneksi();
    $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM anime WHERE id = $id"));
    unlink('../assets/img/' . $data["poster_anime"]);
    $delete = "DELETE FROM anime WHERE id=$id";
    mysqli_query($conn, $delete) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapusKategori($id)
{
    $conn = koneksi();
    $delete = "DELETE FROM kategori WHERE id_kategori=$id";
    mysqli_query($conn, $delete) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapusAdmin($id)
{
    $conn = koneksi();
    $delete = "DELETE FROM users WHERE id = $id";
    mysqli_query($conn, $delete) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function editAnime($data)
{
    $conn = koneksi();
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_anime"]);
    $nama_alt = htmlspecialchars($data["nama_alternatif"]);
    $deskripsi = $data["deskripsi"];
    $studio = htmlspecialchars($data["studio"]);
    $episode = htmlspecialchars($data["episode"]);
    $status = htmlspecialchars($data["status_anime"]);
    $rilis = htmlspecialchars($data["rilis"]);
    $genre = htmlspecialchars(intval($data["genre"]));
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['poster_anime']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    // query insert data
    $query = "  UPDATE anime SET 
                poster_anime = '$gambar',
                nama_anime = '$nama',
                nama_alternatif = '$nama_alt',
                deskripsi = '$deskripsi',
                studio = '$studio',
                episode = '$episode',
                status_anime = '$status',
                rilis = '$rilis',
                id_kategori = '$genre'
                WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editKategori($data)
{
    $conn = koneksi();
    $id = $data["id"];
    $genre = htmlspecialchars($data["genre"]);

    $query = "  UPDATE kategori SET
                genre = '$genre'
                WHERE id_kategori = $id
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editAdmin($data)
{
    $conn = koneksi();
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $newPass = htmlspecialchars($data["password"]);
    $confirmPass = htmlspecialchars($data["confPass"]);
    $level = $data["level"];

    if ($confirmPass !== $newPass) {
        echo "  <script>
                    Password anda tidak sesuai! 
                </script>
             ";
        return false;
    }

    $pass = password_hash($newPass, PASSWORD_DEFAULT);

    $query =    "   UPDATE users SET 
                    nama = '$nama',
                    username = '$username',
                    email = '$email',
                    password = '$pass',
                    level = '$level'
                    WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function register($form)
{
    $conn = koneksi();

    $username = htmlspecialchars($form["username"]);
    $nama = htmlspecialchars($form["nama"]);
    $email = htmlspecialchars($form["email"]);
    $password = mysqli_real_escape_string($conn, $form["password"]);
    $validPass = mysqli_real_escape_string($conn, $form["validPass"]);

    $check = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($check)) {
        echo "  <script>
                    alert('Username sudah terdaftar!');      
                </script>";
        return false;
    }

    // cek konfirmasi password 
    if ($password !== $validPass) {
        echo "  <script>
                    alert('Password anda tidak sesuai!');
                </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // set level registrasi user
    $level = "user";

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$email', '$username', '$password', '$level')");

    return mysqli_affected_rows($conn);
}

function cariAnime($keyword)
{
    $query = "  SELECT * FROM anime 
                NATURAL JOIN kategori 
                WHERE 
                nama_anime LIKE '%$keyword%' OR 
                studio LIKE '%$keyword%' OR
                episode LIKE '%$keyword%' OR
                status_anime LIKE '%$keyword%' OR
                rilis LIKE '%$keyword%' OR
                genre LIKE '%$keyword%'
            ";
    return query($query);
}

function cariKategori($keyword)
{
    $query = "SELECT * FROM kategori WHERE genre LIKE '%$keyword%'";
    return query($query);
}

function checkLoginAdmin()
{
    // cek session login
    if (!isset($_SESSION["login"])) {
        header("Location: ../login.php");
        exit;
    }

    // cek session level 
    if (isset($_SESSION["level"])) {
        if ($_SESSION['level'] == "admin" && $_SESSION['level'] == "super admin") {
            exit;
        } elseif ($_SESSION['level'] == "user") {
            header("Location: ../index.php");
        }
    }
}
