<div id="layoutSidenav_content">
<div class="container-fluid px-4">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                            <label for="no">No</label>
                            <input type="text" name="no" class="form-control" id="no" placeholder="No">
                        </div>
                    <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                        </div>
                        <div class="form-group mb-3">
                            <label for="jurusan">Jurusan</label> 
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value=""disabled>Jurusan</option>
                                <option value="Teknik Informatika">JTI</option>
                                <option value="Sistem Informasi">JTIN</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi"
                                placeholder="Nama Kaprodi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                        </div>
                        <div class="form-group mb-3">
                            <label for="output_lulusan">Output Lulusan</label>
                                <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                        </div>
                        <div class="form-group">
                            <label for="gambar
                        <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>