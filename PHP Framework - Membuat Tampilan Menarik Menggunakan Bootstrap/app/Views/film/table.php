<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LK27</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.css"">
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

  <div class="container mt-3">
    <div class="row">
        <div class="col-md-13">
            <table class="table table-hover">
                <tr class="table-dark">
                    <th>No</th>
                    <th>Nama Film</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; foreach ($dataFilm as $row) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row["nama_film"]?></td>
                        <td><?= $row["nama_genre"]?></td>
                        <td><?= $row["duration"]?></td>
                        <td>
                            <a href="" class="btn btn-success">Update</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
  </div>


  <script src="/assets/js/bootstrap.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>