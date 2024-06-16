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
                <li><a href="<?= base_url('ubsi/jurusan');?>">Program</a></li>
                <li><a href="<?= base_url('ubsi/fasilitas'); ?>">Fasilitas</a></li>
                <li><a href="<?php echo base_url().'ubsi/contact'?>">Hubungi</a></li>
            </ul>
            
    </nav>