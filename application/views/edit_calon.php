<div class="content-wrapper">
    <section class="content">
        <?php foreach($mahasiswa as $mhs){?>

        <form action="<?php echo base_url().'mahasiswa/update_calon';?>" method="post">
    <div class="form-group">
        <label for="">Nama Mahasiswa</label>
        <input type="hidden" name="id" class="form-control" value="<?= $mhs->id ?>">
        <input type="text" name="nama_calon" class="form-control" value="<?= $mhs->nama_calon ?>">
    </div>
    <div class="form-group">
        <label for="">No Telepon</label>
        <input type="text" name="no_telepon" class="form-control" value="<?= $mhs->no_telepon?>">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email_calon" class="form-control" value="<?= $mhs->email_calon ?>">
    </div>
    

    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php } ?>

        
    </section>
</div>