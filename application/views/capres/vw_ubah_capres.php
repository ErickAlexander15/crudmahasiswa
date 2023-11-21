<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Edit Data Capres
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Capres/update'); ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $Capres['id']; ?>">
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $Capres['nama']; ?>" class="form-control"
                                    id="nama" placeholder="Nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NIK">NIK</label>
                                <input type="text" name="nik" value="<?= $Capres['nik']; ?>" class="form-control"
                                    id="nik" placeholder="NIK">
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal">Asal</label>
                                <input type="text" name="asal" value="<?= $Capres['asal']; ?>" class="form-control"
                                    id="nim" placeholder="asal">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Partai</label>
                                <input type="partai" name="partai" value="<?= $Capres['partai']; ?>"
                                    class="form-control" id="partai" placeholder="partai">
                            </div>
                            <div class="form-group mb-3">
                                <label for="riwayat">Riwayat</label>
                                <input type="text" name="riwayat" value="<?= $Capres['riwayat']; ?>"
                                    class="form-control" id="riwayat" placeholder="riwayat">
                            </div>
                            <div class="form-group mb-3">
                                <label for="umur">Umur</label>
                                <input type="text" name="umur" value="<?= $Capres['umur']; ?>"
                                    class="form-control" id="umur" placeholder="umur">
                            </div>
                            <a href="<?= base_url('Capres') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Edit
                                Capres</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>