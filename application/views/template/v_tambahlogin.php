<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
    <div class="login">
        <div class="left">
            <h1>Tambah Anggota Baru</h1>
            <span>UBSI SCHOOL</span>
            <h3>SIGN IN YOUR ACCOUNT</h3>
            <form action="<?= base_url('ubsi/add_user') ?>" method="post">
                <div class="group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password">
                    <i class="fa fa-key"></i>
        </div>
        <div class="group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
                    <i class="fa fa-user"></i>
        </div>

        <button><i class="fa fa-send">Tambah</i></button>
    </form>
    </div>
    <div class="right">
    <a href ="<?php echo base_url('ubsi/index')?>"><img src="<?php echo base_url()?>assets/img/logo1.png" alt=""></a>
    <h1>UBSI SCHOOL</h1>
    </div>
</body>
</html>