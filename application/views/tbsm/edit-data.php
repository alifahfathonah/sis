<div class="row">
    <div class="col-lg-8">
        <div class="card-body pb-0">
            <!-- <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?> -->
            <form action="" method="POST">
                <h5><b>IDENTITAS SISWA</b></h5>
                <div class="form-group row">
                    <label for="verifikasi" class="col-sm-4 col-form-label">STATUS</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="verifikasi" name="verifikasi" value="<?= $siswa['verifikasi']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email Siswa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $siswa['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tp" class="col-sm-4 col-form-label">Tahun Pelajaran</label>
                    <div class="col-sm-8">
                        <select name="tp" id="tp">
                            <option value="<?= $siswa['tp']; ?>"><?= $siswa['tp']; ?></option>
                            <?php foreach ($tp as $t) : ?>
                                <option value="<?= $t['tp']; ?>"><?= $t['tp']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tp" class="col-sm-4 col-form-label">Kelas</label>
                    <div class="col-sm-8">
                        <select name="kelas" id="kelas">
                            <option value="<?= $siswa['kelas']; ?>"><?= $siswa['kelas']; ?></option>
                            <?php foreach ($kelas as $k) : ?>
                                <option value="<?= $k['kelas']; ?>"><?= $k['kelas']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Nama Siswa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $siswa['name']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                        <select name="jk" id="jk">
                            <option value="<?= $siswa['jk']; ?>"><?= $siswa['jk']; ?></option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <h5><b>DATA INSTANSI / LOKASI PKL</b></h5>
                <div class="form-group row">
                    <label for="nama_instansi" class="col-sm-4 col-form-label">Nama Instansi</label>
                    <div class="col-sm-8">
                        <!-- <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="<?= $siswa['nama_instansi']; ?>"> -->
                        <select name="nama_instansi" id="nama_instansi">
                            <option value="<?= $siswa['nama_instansi']; ?>"><?= $siswa['nama_instansi']; ?></option>
                            <?php foreach ($data as $d) : ?>
                                <option value="<?= $d['iduka']; ?>"><?= $d['iduka']; ?></option>
                            <?php endforeach; ?>
                        </select><br />
                        <small>Jika nama instansi tidak ditemukan silahkan hubungi <a href="https://api.whatsapp.com/send?phone=6281328646069">admin (081328646069)</a></small>
                    </div>
                    <?= form_error('nama_instansi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="alamat_instansi" class="col-sm-4 col-form-label">Alamat Instansi</label>
                    <div class="col-sm-8">
                        <!-- <input type="text" class="form-control" id="alamat_instansi" name="alamat_instansi" value="<?= $siswa['alamat_instansi']; ?>"> -->
                        <select name="alamat_instansi" id="alamat_instansi">
                            <option value="<?= $siswa['alamat_instansi']; ?>"><?= $siswa['alamat_instansi']; ?></option>
                            <!-- <?php foreach ($alamat as $a) : ?>
                                <option value=""><?= $a['alamat']; ?></option>
                            <?php endforeach; ?> -->
                        </select>
                        <div id="loading" style="margin-top: 15px;">
                            <img src="<?= base_url('assets/img/loading.gif'); ?>" width="18"> <small>Loading...</small>
                        </div>
                        </select>
                    </div>
                    <?= form_error('alamat_instansi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Alamat Email / Website</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="email_website_instansi" name="email_website_instansi" value="<?= $siswa['email_website_instansi']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Nomor Telp/HP Instansi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="telp_instansi" name="telp_instansi" value="<?= $siswa['telp_instansi']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Nama Pejabat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pejabat" name="nama_pejabat" value="<?= $siswa['nama_pejabat']; ?>">
                    </div>
                    <?= form_error('nama_pejabat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">NIP/NIK/NRP *)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_pejabat" name="no_pejabat" value="<?= $siswa['no_pejabat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Jabatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $siswa['jabatan']; ?>">
                    </div>
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">No Telp/HP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="telp_pejabat" name="telp_pejabat" value="<?= $siswa['telp_pejabat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Alamat Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="email_pejabat" name="email_pejabat" value="<?= $siswa['email_pejabat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-4 col-form-label">Nomor Sertifikat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_sertifikat" name="no_sertifikat" value="<?= $siswa['no_sertifikat']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">VERIFIKASI</button>
            </form>
        </div>
    </div>
</div>