<?= $this->extend('layout/Layout') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row mb-0">
                        <div class="col-md-6">
                            <h2>Halaman Tambah Data Film</h2>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/film" class="btn btn-dark"> Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="nama_film" class="form-label">Nama Film</label>
                                    <input type="text" class="form-control" id="nama_film" name="nama_film">
                                </div>
                                <div class="col-md-6">
                                    <label for="genre" class="form-label"> Genre</label>
                                    <select name="id_genre" id="genre" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="duration" class="form-label">Durasi</label>
                                    <input type="text" class="form-control" name="duration" id="duration">
                                </div>
                                <div class="col-md-6">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input type="file" class="form-control" name="cover" id="cover">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success mt-5">Simpan</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>