<div class="content-wrapper">
<section class="content-header">
      <h1>
        Calon Data Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content"> 
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Calon Data Siswa</button>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>NAMA SISWA</th>
          <th>NO_TELEPON</th>
          <th>EMAIL</th>
          <th colspan="2">AKSI</th>
          
        </tr>
        <?php 
          $no= 1;
          foreach ($calonsiswa as $mhs) : ?>
        <tr>       
          <td><?= $no++ ?></td>
          <td><?= $mhs->nama_calon ?></td>
          <td><?= $mhs->no_telepon ?></td>
          <td><?= $mhs->email_calon ?></td>
          <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus data')"><a href="<?php echo base_url('mahasiswa/hapus_calon/'. $mhs->id.'')?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
          <td><a href="<?php echo base_url('mahasiswa/edit_calon/'. $mhs->id.'')?>"><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></td>
        </tr>
        </tr>
        <?php endforeach; ?>
        
      </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA CALON SISWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"action="<?php echo base_url().'mahasiswa/tambah_calon';?>">
      <div class="form-group">
        <label for="nama_calon">Nama Calon Siswa</label>
        <input type="text" id="nama_calon" name="nama_calon" class="form-control">
      </div>
      <div class="form-group">
        <label for="no_telepon">No. Telepon</label>
        <input type="text" id="no_telepon" name="no_telepon" class="form-control">
      </div>
      <div class="form-group">
        <label for="email_calon">Email</label>
        <input type="text" id="email_calon" name="email_calon" class="form-control">
      </div>
      

      <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      
    </form>
      </div>
      
    </div>
  </div>
</div>
</div>