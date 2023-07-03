<?= $this->extend('layout/Layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Semua Film</h1>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/film/add" class="btn btn-primary"> Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr class="table-dark">
                            <th>No</th>
                            <th>Cover</th>
                            <th>Nama Film</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1;
                        foreach ($dataFilm as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><img width="50" src="assets/cover/<?= $row["cover"] ?>" alt=""></td>
                                <td><?= $row["nama_film"] ?></td>
                                <td><?= $row["nama_genre"] ?></td>
                                <td><?= $row["duration"] ?></td>
                                <td>
                                    <a href="film/update/<?= $row["id"] ?>" class="btn btn-success">Update</a>
                                    <a class="btn btn-danger" onclick="confirmDelete('<?= $row["id"] ?>')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
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