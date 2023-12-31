<?= $this->extend('layout/Layout') ?>

<?= $this->section('content') ?>

  <div class="container mt-3">
    <div class="row">
        <div class="col-md-13">
            <table class="table table-hover">
                <tr class="table-dark">
                    <th>No</th>
                    <th>Cover</th>
                    <th>Nama Film</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; foreach ($dataFilm as $row) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><img width="50" src="assets/cover/<?= $row["cover"]?>" alt=""></td>
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

<?= $this->endSection() ?>