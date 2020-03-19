<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Karyawan <a class="btn btn-primary" href="<?= base_url() . 'admin/C_karyawan/tambah'; ?>">
<i class="fas fa-user-plus"></i></a></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Karyawan</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Karyawan</th>
            <th>Divisi </th>
            <th>Tanggal</th>
            <th>Keterangan/Alesan</th>
            <th>Durasi</th>
            <th>Aksi</th>
          </tr>
        </thead>
          </tr>
        </tfoot>
        <tbody>
        <?php 
        foreach ($karyawan as $kr ) { ?>
          <tr>
            <td><?=$kr->nama_karyawan?></td>
            <td><?=$kr->divisi?></td>
            <?php date_default_timezone_set('Asia/Jakarta');?>
            <td><?= $kr->tanggal . '&nbsp;'?></td>
            <td><?=$kr->keterangan?></td>
            <td><?=$kr->durasi?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_karyawan/edit/'. $kr->id_karyawan); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_karyawan/hapus/'. $kr->id_karyawan); ?>"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->