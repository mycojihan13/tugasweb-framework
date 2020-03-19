<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Karyawan</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
            <?php 
            foreach ($karyawan as $kr ) { ?>
                <form action="<?php echo base_url() . 'admin/C_karyawan/update'; ?>" method="post">
                    <div class="form-group">
                        <label for="nama_karyawan"> Nama Karyawan : </label>
                        <input type="hidden" class="form-control form-control-user"  id="id_karyawan" name="id_karyawan" value="<?php echo $kr->id_karyawan ?>">
                        <input type="text" class="form-control form-control-user" id="nama_karyawan" name="nama_karyawan" placeholder="Masukan Nama Karyawan" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+" value="<?php echo $kr->nama_karyawan ?>">
                    </div>
                    <div class="form-group">
                        <label for="divisi"> Divisi: </label>
                        <textarea name="divisi" class="form-control" id="divisi" cols="30" rows="6" placeholder="Masukkan Divisi Anda"    required><?php echo $kr->divisi ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal"> Tanggal : </label>
                        <?php date_default_timezone_set('Asia/Jakarta');?>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $kr->tanggal ?>">
                     <div class="form-group">
                        <label for="keterangan"> Keterangan: </label>
                        <textarea name="keterangan" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Masukan Ketarangan Anda" title="Isikan data dengan benar" required><?php echo $kr->keterangan ?></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="durasi"> Durasi: </label>
                        <input type="text" class="form-control form-control-user" id="durasi" name="durasi" placeholder="Masukan Durasi Absen" title="Isikan data dengan benar" value="<?php echo $kr->durasi ?>"required>  
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Simpan</button>
                </form>
                <?php } ?>
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