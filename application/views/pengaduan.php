<div class="container">
    <section class="mt-3">
        <h3>Riwayat Pengaduan</h3>
        <div class="row">
            <div class="col-9">
                <?= $this->session->flashdata('message') ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Isi Laporan</th>
                                <th >Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($pengaduan as $p) : ?>   
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p->tgl_pengaduan ?></td>
                                <td><?= $p->isi_laporan ?></td>
                                <td>
                                    <?= anchor('pengaduan/edit/'.$p->id,'<div class="btn btn-sm btn-primary">Edit</div>') ?>
                                    <?= anchor('pengaduan/hapus/'.$p->nik."/".$p->id,'<div class="btn btn-sm btn-danger" onclick="return confirm(\' Yakin ingin menghapus aduan ini? \')">Hapus</div>') ?>
                                </td>
                            </tr>  
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</div>