<?= $this->extend('layout/Layout') ?>

<?= $this->section('content') ?>

<div class="container">
  <h1 class="text-center fw-bold mt-3 mb-3">Daftar Film</h1>
  <div class="row">
    <?php foreach ($data_film as $row) : ?>
      <div class="col-md-4">
        <div class="card mt-3" style="width: 18rem;">
          <img src="/assets/cover/<?= $row['cover'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $row['nama_film'] ?></h5>
            <p class="card-text"><?= $row['nama_genre'] ?> || <?= $row['duration'] ?></p>
            <a href="#" class="btn btn-primary">Detail</a>
            <a href="film/update/<?= encryptUrl($row["id"]); ?>" class="btn btn-success">Update</a>
            <a class="btn btn-danger" onclick="confirmDelete('<?= encryptUrl($row["id"]); ?>')">Delete</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script>
  function confirmDelete(id) {
    swal({
        title: "Apakah Anda yakin?",
        text: "setelah dihapus! data anda akan benar-benar hilang!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

          window.location.href = "/film/destroy/" + id;

        } else {
          swal("Data tidak jadi dihapus!");
        }
      });
  }
</script>

<?= $this->endSection() ?>