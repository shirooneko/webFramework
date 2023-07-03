<?= $this->extend('layout/Layout') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row mb-0">
                        <div class="col-md-6">
                            <h2>Halaman Update Data Genre</h2>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/genre" class="btn btn-dark"> Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/genre/edit" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="<?= $genre["id_genre"] ?>" name="id">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="nama_genre" class="form-label">Nama Genre</label>
                                <input type="text" class="form-control <?= isset($errors['nama_genre']) ? 'is-invalid ' : ''; ?>" id="nama_genre" name="nama_genre" value="<?= isset($errors['nama_genre']) ? old('nama_genre') : $genre["nama_genre"] ?>">
                                <?php if (isset($errors['nama_genre'])) : ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['nama_genre'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>