<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LK27</title>
    <link rel=" stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LK27</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/film">Semua Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kategori Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1 class="text-center fw-bold mt-3 mb-3">Daftar Film</h1>
    <div class="row">
    <?php foreach ($data_film as $row) : ?>
      <div class="col-md-4">
        <div class="card mt-3" style="width: 18rem;">
          <img  src="/assets/cover/<?= $row['cover']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $row['nama_film']?></h5>
            <p class="card-text"><?= $row['nama_genre']?> || <?= $row['duration']?></p>
            <a href="#" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>