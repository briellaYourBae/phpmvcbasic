<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+ Tambah Data Mahasiswa</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Inputkan Data Yang Diminta</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="Home/newMhs" method="post">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                    <input type="text" name="nama" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">NRP:</label>
                                    <input type="text" name="nrp" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="text" name="email" class="form-control" id="recipient-name" placeholder="nick@example.com">
                                </div>
                                <!--<div class="mb-3">
                                     <label for="recipient-name" class="col-form-label">Jurusan:</label>
                                    <input type="text" name="jurusan" class="form-control" id="recipient-name">
                                    </div> -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jurusan:</label>
                                    <select class="form-control" name="jurusan" id="jurusan">
                                    <option value="AKL">AKL</option>
                                    <option value="PPLG">PPLG</option>
                                    <option value="TJKT">TJKT</option>
                                    <option value="BENGKEL">BENGKEL</option>
                                    </select>
                                    <input type="text" name="jurusan" class="form-control" id="recipient-name" placeholder="nother">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        Flasher::flash();
    ?>

   <div class="row">
    <div class="col-lg-6 w-100">
        <h3>Daftar Mahasiswa</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>NRP</th>
                    <th>JURUSAN</th>
                    <th>ACT</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($data['mhs'] as $mhs) : ?>
        <tr>
            <td><?= $mhs['id']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary me-2">Detail</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-success me-2 tampilModelUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>

            </tbody>
        </table>
    </div>
</div>
</div>


<script src="http://localhost/basicmvc/public/sweetalert/sweetalert2.min.js"></script>
<!-- <script>
        Swal.fire({
            title: "Submit your Github username",
            input: "text",
            inputAttributes: {
                autocapitalize: "off"
            },
            showCancelButton: true,
            confirmButtonText: "Look up",
            showLoaderOnConfirm: true,
            preConfirm: async (login) => {
                try {
                    const githubUrl = `
        https://api.github.com/users/${login}
      `;
                    const response = await fetch(githubUrl);
                    if (!response.ok) {
                        return Swal.showValidationMessage(`
          ${JSON.stringify(await response.json())}
        `);
                    }
                    return response.json();
                } catch (error) {
                    Swal.showValidationMessage(`
        Request failed: ${error}
      `);
                }
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: `${result.value.login}'s avatar`,
                    imageUrl: result.value.avatar_url
                });
            }
        });
</script> -->