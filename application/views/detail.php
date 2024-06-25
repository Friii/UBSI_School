<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA GURU</strong></h4>


        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $detail->nama_guru; ?></td>
            </tr>
            <tr>
                <th>NIP</th>
                <td><?php echo $detail->nip_guru; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->tgl_lahir; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat; ?></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td><?php echo $detail->jabatan; ?></td>
            </tr>
            <tr>
                <th>Guru Pelajaran</th>
                <td><?php echo $detail->pelajaran; ?></td>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo base_url();?>assets/img/upload/<?= $detail->foto?>" width="90" height="110">
                </td>
            </tr>
            
            
        </table>
        <a href="<?php echo base_url('mahasiswa/guru')?>" class="btn btn-primary">Kembali</a>
    </section>
</div>