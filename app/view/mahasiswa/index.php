<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail <?= $mhs['id']; ?>" class="badge bg-primary float-right">Detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>=" class="badge bg-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];?>">ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus <?= $mhs['id']; ?>" class="badge bg-warning float-right">hapus</a>
                    </li>
                    <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>