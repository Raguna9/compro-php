<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-success shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="source/images/statis/Logo_Ponpes.png" alt="Logo_Ponpes" width="40" height="40" class="d-inline-block align-text-center" />
            Yayasan Pondok Pesantren Darul Atqia
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Contoh: Menambahkan kelas "active" ke elemen navbar "Home" pada halaman "index.php" -->
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "profile.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                                    echo "#profile";
                                                } else if (basename($_SERVER['PHP_SELF']) == "kontak.php") {
                                                    echo "profile.php";
                                                } else if (basename($_SERVER['PHP_SELF']) == "profile.php") {
                                                    echo "profile.php";
                                                } else if (basename($_SERVER['PHP_SELF']) == "artikel.php") {
                                                    echo "profile.php";
                                                } ?>">Profile</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "pelajaran.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                                    echo "#pelajaran";
                                                } else if (basename($_SERVER['PHP_SELF']) == "kontak.php") {
                                                    echo "index.php#pelajaran";
                                                } else if (basename($_SERVER['PHP_SELF']) == "profile.php") {
                                                    echo "index.php#pelajaran";
                                                } else if (basename($_SERVER['PHP_SELF']) == "artikel.php") {
                                                    echo "index.php#pelajaran";
                                                } ?>">Pelajaran</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "artikel.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="artikel.php">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                                    echo "#galery";
                                                } else if (basename($_SERVER['PHP_SELF']) == "kontak.php") {
                                                    echo "index.php#galery";
                                                } else if (basename($_SERVER['PHP_SELF']) == "profile.php") {
                                                    echo "index.php#galery";
                                                } else if (basename($_SERVER['PHP_SELF']) == "artikel.php") {
                                                    echo "index.php#galery";
                                                } ?>">Galeri</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "kontak.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "login.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="login.php">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.55em" height="1.55em">
                            <use xlink:href="#person" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->