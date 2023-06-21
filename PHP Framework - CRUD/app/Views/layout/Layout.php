<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LK27</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LK27</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if (uri_string() == '') echo 'active'; ?>" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (uri_string() == 'film') echo 'active'; ?>" href="/film">Semua Film</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if (uri_string() == 'genre') echo 'active'; ?>" href="/genre">Kategori Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (uri_string() == 'aboutMe') echo 'active'; ?>" href="/aboutMe">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <footer id="sticky-footer" class="bg-dark text-center text-white p-3 mt-5">
        &copy <script>
            document.write(new Date().getFullYear())
        </script> Muhammad Apriyansyah
    </footer>

    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

    <?php endif; ?>
</body>

</html>