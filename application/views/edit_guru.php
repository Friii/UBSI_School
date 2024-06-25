<div class="content-wrapper">
    <section class="content">
        <?php foreach($mahasiswa as $mhs){?>

        <form action="<?php echo base_url().'mahasiswa/update_guru';?>" method="post">
    <div class="form-group">
        <label for="">Nama Guru</label>
        <input type="hidden" name="id" class="form-control" value="<?= $mhs->id ?>">
        <input type="text" name="nama_guru" class="form-control" value="<?= $mhs->nama_guru ?>">
    </div>
    <div class="form-group">
        <label for="">NIP</label>
        <input type="text" name="nip_guru" class="form-control" value="<?= $mhs->nip_guru?>">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir?>">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?= $mhs->alamat?>">
    </div>
    <div class="form-group">
        <label for="">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" value="<?= $mhs->jabatan?>">
    </div>
    <div class="form-group">
        <label for="">Guru Pelajaran</label>
        <input type="text" name="pelajaran" class="form-control" value="<?= $mhs->pelajaran?>">
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" name="foto" class="form-control" value="<?= $mhs->foto?>">
    </div>
    
    
    
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php } ?>

        
    </section>
</div>