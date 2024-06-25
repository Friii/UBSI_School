<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Guru
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
          <td><?= $mhs->foto ?></td>
          <td><?= $mhs->jabatan ?></td>
          <td><?= $mhs->pelajaran ?></td>
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
            <option>Teknik Kendaraan Ringan</option>    
            <option>Teknik Jaringan Komputer</option>    
            <option>Teknik Instalasi Tenaga Listrik</option>    
            <option>Teknik Audio Video</option>    
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