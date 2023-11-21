<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Capres
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Capres/upload'); ?>" method="POST">
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="NIK">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal">Asal</label>
                                <input type="text" name="asal" class="form-control" id="asal" placeholder="Asal">
                            </div>
                            <div class="form-group mb-3">
                                <label for="partai">Partai Pendukung</label>
                                <input type="text" name="partai" class="form-control" id="partai" placeholder="Partai">
                            </div>
                            <div class="form-group mb-3">
                                <label for="riwayat">Riwayat Penyakit</label>
                                <input type="text" name="riwayat" class="form-control" id="riwayat"
                                    placeholder="Riwayat Penyakit">
                            </div>
                            <div class="form-group mb-3">
                                <label for="umur">Umur</label>
                                <input type="text" name="umur" class="form-control" id="umur" placeholder="Umur">
                            </div>
                            <a href="<?= base_url('Capres') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Capres</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>