<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBSI School</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <nav>
        <div class="logo">
           <a href ="<?php echo base_url('ubsi/index')?>"><img src="<?php echo base_url()?>assets/img/logo.png" alt=""></a>
        </div>
        <div class="menu-icon" id="menu-icon">
            <i class="fa-solid fa-bars"></i>
            </div>
            <ul id="menu-list" class="hidden">
                <li><a href="<?php echo base_url().'ubsi/index'?>">Akademik</a></li>
                <li><a href="<?= base_url('ubsi/jurusan');?>">Kompotensi Keahlian</a></li>
                <li><a href="<?= base_url('ubsi/fasilitas'); ?>">Fasilitas</a></li>
                <li><a href="<?php echo base_url().'ubsi/contact'?>">Hubungi</a></li>
            </ul>
            
    </nav>

<div class="anak-contact">
        <img src="<?php echo base_url();?>assets/img/Roadmap.png" alt="anakcontact">
    </div>

    <div class="contact-container">
        <div class="form-contact">
            <form action="<?= base_url()?>ubsi/savedata" method="post">
                <div class="form-container">
                    <div class="form-group">
                        <label for="nama_calon">Nama Calon</label>
                        <div class="input-container">
                            <i class="fa fa-user"></i>
                            <input type="text" id="nama_calon" name="nama_calon" placeholder="Nama Calon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon</label>
                        <div class="input-container">
                            <i class="fa fa-phone"></i>
                            <input type="text" id="no_telepon" name="no_telepon" placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_calon">Email</label>
                        <div class="input-container">
                            <i class="fa fa-envelope"></i>
                            <input type="text" id="email_calon" name="email_calon" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-container">
                            <i class="fa fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="submit-button" name="save" value="Kirim">
                    </div>
                </div>
            </form>
        </div>
        <div class="info-section">
            <p class="text">Lengkapi data <strong>Nama Calon</strong> dan <strong>Nomor Telepon</strong> aktif yang dapat dihubungi.</p>
            <p class="textt">Pastikan email UBSI School tidak berada di folder <strong>SPAM/JUNK</strong>.</p>
            
        </div>
    </div>
    
    

</body>