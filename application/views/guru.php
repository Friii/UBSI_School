<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Guru
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content"> 
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Siswa</button>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>NAMA GURU</th>
          <th>NIP</th>
          <th>FOTO</th>
          <th>JABATAN</th>
          <th>GURU PELAJARAN</th>
          <th colspan="2">AKSI</th>
        </tr>
        <?php 
          $no= 1;
          foreach ($guru as $mhs) : ?>
        <tr>       
          <td><?= $no++ ?></td>
          <td><?= $mhs->nama_guru ?></td>
          <td><?= $mhs->nip_guru ?></td>
          <td><img src="<?= base_url();?>assets/img/upload/<?= $mhs->foto?>"width="90" height="110"></td>
          <td><?= $mhs->jabatan ?></td>
          <td><?= $mhs->pelajaran ?></td>
          <td><a href="<?php echo base_url('mahasiswa/detail/'. $mhs->id.'')?>"><div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div></td>
          <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus data')"><a href="<?php echo base_url('mahasiswa/hapus_guru/'. $mhs->id.'')?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
          <td><a href="<?php echo base_url('mahasiswa/edit_guru/'. $mhs->id.'')?>"><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></td>
        </tr>
        <?php endforeach; ?>
        
      </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA GURU</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('mahasiswa/tambah_guru'); ?>
        
      <div class="form-group">
        <label for="nama_guru">Nama Guru</label>
        <input type="text" id="nama_guru" name="nama_guru" class="form-control" >
      </div>
      <div class="form-group">
        <label for="nip_guru">NIP</label>
        <input type="text" id="nip_guru" name="nip_guru" class="form-control">
      </div>
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="form-control">
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" >
      </div>
      <div class="form-group">
        <label for="pelajaran">Pelajaran</label>
        <input type="text" class="form-control form-control-user" id="pelajaran" name="pelajaran" >
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control form-control-user" id="foto" name="foto" size="20" >
      </div>
      <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      
    <?php echo form_close(); ?>
    
      </div>
      
    </div>
  </div>
</div>
</div>