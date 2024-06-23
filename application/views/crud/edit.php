<div class="container mt-5">
    <h1 class="mb-4"><?= $judul ?></h1>
    <form action="<?= base_url('mahasiswa/update/' . $mahasiswa['id']); ?>" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>" required>
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>