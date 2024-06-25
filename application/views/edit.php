<div class="content-wrapper">
    <section class="content">
        <?php foreach($mahasiswa as $mhs){?>

        <form action="<?php echo base_url().'mahasiswa/update';?>" method="post">
    <div class="form-group">
        <label for="">Nama Mahasiswa</label>
        <input type="hidden" name="id" class="form-control" value="<?= $mhs->id ?>">
        <input type="text" name="nama" class="form-control" value="<?= $mhs->nama ?>">
    </div>
    <div class="form-group">
        <label for="">NIP</label>
        <input type="text" name="nip" class="form-control" value="<?= $mhs->nip?>">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="text" name="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir ?>">
    </div>
    <div class="form-group">
        <label for="">Jurusan</label>
        <select class="form-control" name="jurusan" value="<?= $mhs->jurusan ?>">
            <option>Teknik Kendaraan Ringan</option>    
            <option>Teknik Jaringan Komputer</option>    
            <option>Teknik Instalasi Tenaga Listrik</option>    
            <option>Teknik Audio Video</option>    
            </select>
    </div>

    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php } ?>

        
    </section>
</div>