<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h3 class="mb-4">Daftar Mahasiswa</h3>
            <a href="<?= base_url('mahasiswa/add'); ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

            <?php if (!empty($mahasiswa)) : ?>
                <ul class="list-group">
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong><?= $mhs['nama'] ?></strong> <br>
                                NIM: <?= $mhs['nim'] ?> <br>
                                Email: <?= $mhs['email'] ?> <br>
                                Jurusan: <?= $mhs['jurusan'] ?>
                            </div>
                            <div>
                                <a href="<?= base_url('mahasiswa/edit/' . $mhs['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('mahasiswa/delete/' . $mhs['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <div class="alert alert-warning" role="alert">
                    Tidak ada data mahasiswa.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
