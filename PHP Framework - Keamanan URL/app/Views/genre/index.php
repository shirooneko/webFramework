<?= $this->extend('layout/Layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Daftar Genre</h1>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/genre/add" class="btn btn-primary"> Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr class="table-dark">
                            <th>No</th>
                            <th>Nama Genre</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1;
                        foreach ($genre as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row["nama_genre"] ?></td>
                                <td>
                                    <a href="/genre/update/<?= encryptUrl($row["id_genre"]); ?>" class="btn btn-success">Update</a>
                                    <a class="btn btn-danger" onclick="confirmDelete('<?= encryptUrl($row["id_genre"]); ?>')">Delete</a>
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

                    window.location.href = "/genre/destroy/" + id;

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>

<?= $this->endSection() ?>