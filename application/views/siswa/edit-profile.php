<div class="row">
    <div class="col-lg-8">
        <?= form_open_multipart('siswa/Profile'); ?>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nis" name="nis" value="<?= $user['nis']; ?>">
                <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Photo</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/foto/') . $user['image']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                            <small>ukuran file tidak boleh lebih dari 2Mb (format file gif|jpg|png)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
        <!-- <?= form_close(); ?> -->
    </div>
</div>