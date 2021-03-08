<?php 	$user = $this->ion_auth->user()->row();
		$nik = $user->nik; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="#">SIKEMAS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php if($this->ion_auth->is_admin()) : ?>
        <a class="nav-item nav-link <?= ($halaman == 'auth') ? 'active' : '' ?>" href="<?= base_url('auth') ?>">Daftar User</a>
        <?php endif; ?>
        <a class="nav-item nav-link <?= ($halaman == 'identitas') ? 'active' : '' ?>" href="<?= base_url('identitas') ?>">Identitas Diri</a>
        <a class="nav-item nav-link <?= ($halaman == 'pengaduan/tambah') ? 'active' : '' ?>" href="<?= base_url('pengaduan/tambah') ?>">Input Pengaduan</a>
        <a class="nav-item nav-link <?= ($halaman == 'pengaduan') ? 'active' : '' ?>" href="<?= base_url('pengaduan/') ?>">Riwayat Pengaduan</a>
        <a class="nav-item nav-link" onclick="return confirm('Anda yakin ingin logout?')" href="<?= base_url('auth/logout') ?>">Logout</a>
      </div>
    </div>

  </div>
</nav>