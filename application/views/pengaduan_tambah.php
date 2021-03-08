<?php $user = $this->ion_auth->user()->row();
		$nik = $user->nik; ?>
<div class="container">
    <section class="mt-3">
        <h3>Tambah Pengaduan</h3>
        <br>    
        <div class="row">
            <div class="col-6">
            <form action="<?= base_url('pengaduan/tambahAksi') ?>" method="post">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="hidden" name="tgl_pengaduan" value="<?= date('Y-m-d') ?>">
                    <input type="text" name="nik" value="<?= $nik ?>" class="form-control" readonly />   
                </div>
                <div class="form-group">
                    <label for="isi_laporan">Isi Laporan</label>
                    <textarea name="isi_laporan" id="isi_laporan" cols="30" rows="10" class="form-control" placeholder="Silahkan isi laporan secara singkat padat ddan jelas !" require></textarea>   
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            </div>
        </div>
    </section>
</div>