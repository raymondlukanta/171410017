<h3 align="center">Tambah Dosen</h3>
<form class="form-horizontal" method="post" action="?halaman=dosen_ad" enctype="multipart/form-data">
       <div class="form-group">
        <label class="col-sm-3 control-label">NIP : </label>
        <div class="col-sm-4">
        <input type="text" name="nip" class="form-control" placeholder="NIP" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">NIDN : </label>
        <div class="col-sm-4">
        <input type="text" name="nidn" class="form-control" placeholder="NIDN" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">No. Sertifikat : </label>
        <div class="col-sm-4">
        <input type="text" name="nosertifikat" class="form-control" placeholder="No. Sertifikat" required>
        </div>
    </div> 

        <div class="form-group">
        <label class="col-sm-3 control-label">Nama Dosen : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen" required>
        </div>
    </div> 

        <?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_prodi ORDER BY id_prodi ASC";
  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID Prodi :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_prodi">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['id_prodi'] ?></option>
<?php } ?>
  </select>
    </div>
</div>

        <div class="form-group">
        <label class="col-sm-3 control-label">Telepon : </label>
        <div class="col-sm-4">
        <input type="text" name="tlp" class="form-control" placeholder="Telepon" required>
        </div>
    </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">Email : </label>
        <div class="col-sm-4">
        <input type="text" name="email" class="form-control" placeholder="Email" required>
        </div>
    </div> 

 <div class="form-group">
    <label class="col-sm-3 control-label" >Jenis Kelamin :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="jk">
<option>Laki-laki</option>
<option>Perempuan</option>
  </select>
    </div>
</div>

<?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_fakultas ORDER BY id_fakultas ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID Fakultas :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_fakultas">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['id_fakultas'] ?></option>
<?php } ?>
  </select>
    </div>
</div>

<?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_jab_fung ORDER BY id_jabfung ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID JabFung :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_jabfung">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['id_jabfung'] ?></option>
<?php } ?>
  </select>
    </div>
</div>

<?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_golongan ORDER BY id_gol ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID Golongan :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_gol">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['id_gol'] ?></option>
<?php } ?>
  </select>
    </div>
</div>

        <div class="form-group">
        <label class="col-sm-3 control-label">Tanggal Lahir : </label>
        <div class="col-sm-4">
        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
        </div>
    </div> 

         <div class="form-group">
        <label class="col-sm-3 control-label">Tempat Lahir : </label>
        <div class="col-sm-4">
        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
        </div>
    </div> 

   <div class="form-group">
        <label class="col-sm-3 control-label">S1 : </label>
        <div class="col-sm-4">
        <input type="text" name="s1" class="form-control" placeholder="S1" required>
        </div>
    </div> 

       <div class="form-group">
        <label class="col-sm-3 control-label">S2 : </label>
        <div class="col-sm-4">
        <input type="text" name="s2" class="form-control" placeholder="S2" required>
        </div>
    </div> 

       <div class="form-group">
        <label class="col-sm-3 control-label">S3 : </label>
        <div class="col-sm-4">
        <input type="text" name="s3" class="form-control" placeholder="S3" required>
        </div>
    </div> 

<?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_jenis_dosen ORDER BY id_jenis ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID Jenis Dosen :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_jenis">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['id_jenis'] ?></option>
<?php } ?>
  </select>
    </div>
</div>

<?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_jabatan ORDER BY id_jabatan ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID Jabatan :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_jabatan">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['id_jabatan'] ?></option>
<?php } ?>
  </select>
    </div>
</div>

         <div class="form-group">
        <label class="col-sm-3 control-label">Bidang Ilmu : </label>
        <div class="col-sm-4">
        <input type="text" name="bidangilmu" class="form-control" placeholder="Bidang Ilmu" required>
        </div>
    </div> 

    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="dosen_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=dosen" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
<?php include "view_dosen.php" ?>