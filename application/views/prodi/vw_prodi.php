<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="h3 mb-4 text-gray-800">
                <?= $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url()?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a></div>
                <div class="col-md-12">
                <?= $this->session->flashdata('message');?>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Prodi</td>
                                <td>Ruangan</td>
                                <td>Jurusan</td>
                                <td>Akreditasi</td>
                                <td>Nama Kaprodi</td>
                                <td>Tahun Berdiri</td>
                                <td>Output Lulusan</td>
                                <td>Gambar</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                            <?php foreach ($prodi as $p): ?>
                                <tr>
                                    <td> <?= $i; ?></td>
                                    <td> <?= $p['nama']; ?></td>
                                    <td> <?= $p['ruangan']; ?></td>
                                    <td> <?= $p['jurusan']; ?></td>
                                    <td> <?= $p['akreditasi']; ?></td>
                                    <td> <?= $p['nama_kaprodi']; ?></td>
                                    <td> <?= $p['tahun_berdiri']; ?></td>
                                    <td> <?= $p['output_lulusan']; ?></td>
                                    <td><img src="<?= base_url('assets/assets/img/prodi/').$p['gambar'];?>"style="width: 100px;" class"img-thumbnail">
                                    <td>
                                        <a href="<?= base_url('Prodi/hapus/') . $p['id'] ?>" class="badge bg-danger">Hapus</a>
                                        <a href="<?= base_url('Prodi/edit/') . $p['id'] ?>" class="badge bg-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</div>
</main>