<?= $this->extend('layout/Layout') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row mb-0">
                        <div class="col-md-6">
                            <h2>Halaman Edit Film</h2>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/film" class="btn btn-dark"> Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/film/edit" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" value="<?= $dataFilm["id"] ?>" name="id"> <!-- tambahkan film input type hidden id -->
                            <div class="col-md-6">
                                <label for="nama_film" class="form-label">Nama Film</label>
                                <!-- tambahkan kondisi pada value start-->
                                <input type="text" class="form-control <?= isset($errors['nama_film']) ? 'is-invalid ' : ''; ?>" id="nama_film" name="nama_film" value="<?= isset($errors['nama_film']) ? old('nama_film') : $dataFilm["nama_film"] ?>">
                                <!-- tambahkan kondisi pada value end-->
                                <?php if (isset($errors['nama_film'])) : ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['nama_film'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="genre" class="form-label">Genre</label>
                                <select name="id_genre" id="genre" class="form-control <?= isset($errors['id_genre']) ? 'is-invalid ' : ''; ?>" name="id_genre" value="<?= old('id_genre'); ?>">
                                    <option value="">PILIH..</option>
                                    <?php foreach ($genre as $g) : ?>
                                        <!-- tambahkan kondisi ini start -->
                                        <?php if ($dataFilm['id_genre'] == $g["id_genre"]) : ?>
                                            <option value="<?= $g["id_genre"] ?>" selected> <?= $g["nama_genre"] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $g["id_genre"] ?>"><?= $g["nama_genre"] ?></option>
                                        <?php endif; ?>
                                        <!-- tambahkan kondisi ini end -->
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_genre'])) : ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_genre'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="duration" class="form-label">Durasi</label>
                                <!-- tambahkan kondisi pada value start-->
                                <input type="text" class="form-control <?= isset($errors['duration']) ? 'is-invalid ' : ''; ?>" id="duration" name="duration" value="<?= isset($errors['nama_film']) ? old('duration') : $dataFilm["duration"] ?>">
                                <!-- tambahkan kondisi pada value end-->
                                <?php if (isset($errors['duration'])) : ?>
                                    <div class=" invalid-feedback">
                                        <?= $errors['duration'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- ubah menjadi seperti ini pada cover -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input type="file" class="form-control <?= isset($errors['cover']) ? 'is-invalid' : ''; ?>" id="cover" name="cover" value="<?= old('cover'); ?>">
                                    <?php if (isset($errors['cover'])) : ?>
                                        <div class="invalid-feedback">
                                            <?= $errors['cover'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label mt-2">Cover Saat ini</label>
                                    <div class="mb-2">
                                        <?php if ($dataFilm["cover"]) : ?>
                                            <img src="/assets/cover/<?= $dataFilm["cover"]; ?>" width="100">
                                        <?php else : ?>
                                            <span>Tidak ada gambar lama</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
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