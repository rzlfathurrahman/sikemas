<?php foreach($pengaduan as $p) : ?>
    <div class="container">
        <section class="mt-3">
        <h3>Tambah Pengaduan</h3>
        <br>    
        <div class="row">
            <div class="col-6">
            <form action="<?= base_url('pengaduan/update/') ?>" method="post">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="hidden" name="id" value="<?= $p->id ?>">
                    <input type="hidden" name="tgl_pengaduan" value="<?= $p->tgl_pengaduan ?>">
                    <input type="text" name="nik" value="<?= $p->nik ?>" class="form-control" readonly />   
                </div>
                <div class="form-group">
                    <label for="isi_laporan">Isi Laporan</label>
                    <textarea name="isi_laporan" id="isi_laporan" cols="30" rows="10" class="form-control" placeholder="Silahkan isi laporan secara singkat padat ddan jelas !" require><?= $p->isi_laporan ?></textarea>   
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
    </section>
</div>
<?php endforeach; ?>