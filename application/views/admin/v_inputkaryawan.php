<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Karyawan</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'admin/C_karyawan/tambah_karyawan'; ?>" method="post">
                    <div class="form-group">
                        <label for="nama_karyawan"> Nama Karyawan : </label>
                        <input type="text" class="form-control form-control-user" id="nama_karyawan" name="nama_karyawan" placeholder="Masukan Nama karyawan" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="divisi"> Divisi: </label>
                        <input type="text" class="form-control form-control-user" id="divisi" name="divisi" placeholder="Masukan Nama karyawan" title="Isikan data dengan benar" required> 
                    </div>
                    <div class="form-group">
                        <label for="tanggal"> Tanggal : </label>
                        <?php date_default_timezone_set('Asia/Jakarta');?>
                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="keterangan"> Keterangan: </label>
                        <textarea name="keterangan" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Masukan Ketarangan Anda" title="Isikan data dengan benar" required></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="durasi"> Durasi: </label>
                        <input type="text" class="form-control form-control-user" id="durasi" name="durasi" placeholder="Masukan Durasi Absen" title="Isikan data dengan benar" required> 
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">

                    </div>
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>