<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="h3 mb-4 text-gray-800">
                <?= $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>Capres/tambah" class="btn btn-info mb-2">Tambah
                        Capres</a></div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NIK</td>
                                <td>Partai</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($Capres as $us): ?>
                                <tr>
                                    <td> <?= $i; ?></td>
                                    <td> <?= $us['nama']; ?></td>
                                    <td> <?= $us['nik']; ?></td>
                                    <td> <?= $us['partai']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Capres/hapus/') . $us['id'] ?>" class="badge bg-danger">Hapus</a>
                                        <a href="<?= base_url('Capres/edit/') . $us['id'] ?>" class="badge bg-warning">Edit</a>
                                        <a href="<?= base_url('Capres/detail/') . $us['id'] ?>"
                                            class="badge bg-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>