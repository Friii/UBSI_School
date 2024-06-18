<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content"> 
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Siswa</button>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>NAMA SISWA</th>
          <th>NO_TELEPON</th>
          <th>EMIAL</th>
          <th>PASSWORD</th>
        </tr>
        <?php 
          $no= 1;
          foreach ($calonsiswa as $mhs) : ?>
        <tr>       
          <td><?= $no++ ?></td>
          <td><?= $mhs->nama_calon ?></td>
          <td><?= $mhs->no_telepon ?></td>
          <td><?= $mhs->email_calon ?></td>
          <td><?= $mhs->password ?></td>
        </tr>
        <?php endforeach; ?>
        
      </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SISWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"action="<?php echo base_url().'mahasiswa/tambah_aksi';?>">
      <div class="form-group">
        <label for="nama">Nama Siswa</label>
        <input type="text" id="nama" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" id="nip" name="nip" class="form-control">
      </div>
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
      </div>
      <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" name="jurusan">
            <option>Sistem Informasi</option>    
            <option>Teknik Informasi</option>    
            <option>Teknik Komputer</option>    
            </select>
        </div>

      <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      
    </form>
      </div>
      
    </div>
  </div>
</div>
</div>