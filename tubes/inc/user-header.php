<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Poppins&display=swap');

    .navbar-menu {
        font-family: 'Poppins', sans-serif;

    }

    .navbar-title {
        font-family: 'Poppins', sans-serif;
    }

    .navbar-title:hover {
        font-weight: 600;
    }

    /* .menu-title,
    .card-title {
        font-family: 'Nunito', sans-serif;
    }

    .card-btn {
        font-family: 'Nunito', sans-serif;
        font-weight: 600;
    }

    .color-scheme {
        color: #242F9B;
    } */

    footer {
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #FFFFFF;
    }

    .modal-backdrop {
        z-index: 3;
    }
</style>

<!-- Favicons -->
<link rel="icon" href="assets/img/favicon.ico">

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top pt-3 pb-3">
    <div class="container">
        <a href="index.php" class="navbar-brand navbar-title d-flex align-items-center">
            <img src="assets/img/punimu.png" class="mr-2" alt="" width="30px" height="30px">
            Punimu
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-menu">
                <li class="nav-item">
                    <a class="nav-link mr-3" href="anime-section.php">Anime</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Genre
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($kategori as $k) : ?>
                            <a class="dropdown-item" href="kategori.php?id=<?= $k["id_kategori"]; ?>"><?= $k["genre"]; ?></a>
                        <?php endforeach; ?>
                    </div>
                </li>
                <?php if (!isset($_SESSION["login"])) { ?>
                    <li class="nav-item">
                        <a class="btn btn-primary nav-link mr-3" href="login.php" style="color: white;"><i class="fas fa-arrow-right-to-bracket"></i> Login</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline"><?= $_SESSION["username"]; ?></span>
                            <img class="img-profile rounded-circle" src="assets/img/nophoto.jpg" width="20" height="20">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profile.php?id=<?= $_SESSION["id"]; ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                                Logout
                            </a>
                        </div>
                    <?php } ?>
                    </li>
        </div>
    </div>
</nav>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pencet tombol "logout" jika kamu mau keluar dari sesi ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

</nav>
</div>
</div>
<!-- End of header -->