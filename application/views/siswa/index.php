

  <!-- Divider -->
  <hr class="sidebar-divider">
  <div class="container ml-4">

    <a href="siswa/tambah" type="submit" class="btn btn-primary">Tambah Siswa</a>
 </div>

  <!-- row table-->
  <div class="row">
    <div class="table-responsive table-bordered col-lg-11 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-users text-primary mt-2 "> Data User</span>
        <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
      </div>
      <table class="table mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>nis</th>
            <th>kelas</th>
            <th>tanggal lahir</th>
            <th>tempat lahir</th>
			<th>alamat</th>
			<th>jenis kelamin</th>
			<th>agama</th>
			<th>opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($siswa as $sis) { ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $sis['nama']; ?></td>
              <td><?= $sis['nis']; ?></td>
              <td><?= $sis['kelas']; ?></td>
              <td><?= $sis['tanggal_lahir']; ?></td>
			  <td><?= $sis['tempat_lahir']; ?></td>
			  <td><?= $sis['alamat']; ?></td>
			  <td><?= $sis['jenis_kelamin']; ?></td>
			  <td><?= $sis['agama']; ?></td>
			  <td>
  <a href="<?= base_url('siswa/edit/').$sis['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
  <a href="<?= base_url('siswa/hapus/').$sis['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $sis['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></td>
              
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


  

  </div>
  <!-- end of row table-->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
