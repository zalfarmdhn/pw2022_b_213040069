<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Poppins&display=swap');

    .header-menu {
        font-family: 'Poppins', sans-serif;

    }

    .header-title {
        font-family: 'Poppins', sans-serif;
    }

    .header-title:hover {
        font-weight: 600;
    }

    .menu-title,
    .card-title {
        font-family: 'Nunito', sans-serif;
    }

    .card-btn {
        font-family: 'Nunito', sans-serif;
        font-weight: 600;
    }

    .color-scheme {
        color: #242F9B;
    }

    footer {
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #FFFFFF;
    }
</style>

<!-- Favicons -->
<link rel="icon" href="assets/img/favicon.ico">

<!-- Header -->
<div class="navbar navbar-dark fixed-top bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <img src="assets/img/punimu.png" class="mr-2" alt="" width="30px" height="30px">
            <h5 class="header-title">Punimu</h5>
        </a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <!-- Links -->
            <ul class="navbar-nav header-menu">
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
                <li class="nav-item">
                    <a class="nav-link mr-3" href="#">Stream</a>
                </li>
                <?php if (isset($_SESSION["login"])) { ?>
                    <?php if ($_SESSION["level"]) { ?>
                        <?php if ($_SESSION["level"] == "user") { ?>
                            <li class="nav-item">
                                <a class="nav-link mr-3" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary nav-link mr-3" href="logout.php" style="color: white;" onclick="return confirm('Apakah kamu yakin ingin logout?')"><i class="fas fa-arrow-right-to-bracket"></i> Logout</a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="btn btn-primary nav-link mr-3" href="login.php" style="color: white;"><i class="fas fa-arrow-right-to-bracket"></i> Login</a>
                    </li>
                <?php } ?>
            </ul>




        </nav>
    </div>
</div>
<!-- End of header -->