<div>
    <div class="sidebar p-4 bg-success" id="sidebar">
        <center class="">

            <img src="../source/images/statis/Logo_Ponpes.png" alt="" width="75px">
            <h4 class="mb-1 text-white">DARUL ATQIA</h4>
        </center>
        <hr class="text-white" />
        <li>
            <a class="text-white nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'adm_pelajaran.php')
                echo 'bg-warning'; ?>"
                href="adm_pelajaran.php">
                <i class="bi bi-book"></i>
                Pelajaran
            </a>
        </li>
        <li>
            <a class="text-white nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'adm_fasilitas.php')
                echo 'bg-warning'; ?>"
                href="adm_fasilitas.php">
                <i class="bi bi-building"></i>
                Fasilitas
            </a>
        </li>
        <li>
            <a class="text-white nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'adm_foto.php')
                echo 'bg-warning'; ?>"
                href="adm_foto.php">
                <i class="bi bi-images"></i>
                Foto
            </a>
        </li>
        <li>
            <a class="text-white nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'adm_artikel.php')
                echo 'bg-warning'; ?>"
                href="adm_artikel.php">
                <i class="bi bi-newspaper"></i>
                Artikel
            </a>
        </li>
        <li>
            <a class="text-white nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'adm_pesan.php')
                echo 'bg-warning'; ?>"
                href="adm_pesan.php">
                <i class="bi bi-chat-dots-fill"></i>
                Pesan
            </a>
        </li>
        <li>
            <a class="text-white nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'adm_balasan.php')
                echo 'bg-warning'; ?>"
                href="adm_balasan.php">
                <i class="bi bi-chat-left-dots"></i>
                Basalan Artikel
            </a>
        </li>
        <li>
            <a class="text-white nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'adm_setting.php')
                echo 'bg-warning'; ?>"
                href="adm_setting.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-gear" viewBox="0 0 16 16">
                    <path
                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
                Setting
            </a>
        </li>
        <li>
            <a class="text-white nav-link" href="../logout.php">
                <i class="bi bi-door-open"></i>
                Log Out
            </a>
        </li>
    </div>
</div>