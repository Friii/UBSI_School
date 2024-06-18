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

<div class="anak-contact">
        <img src="<?php echo base_url();?>assets/img/Roadmap.png" alt="anakcontact">
    </div>
<div class="container">

   <form action="<?= base_url()?>ubsi/savedata" method="post">
<table width="600" border="1" cellspacing="5" cellpadding="5">
    <tr>
        <td>
            First name
        </td>
        <td><input type="text" name="nama_calon"></td>
    </tr>
    <tr>
        <td>kontak</td>
        <td><input type="text" name="no_telepon"></td>
    </tr>
    <tr>
        <td>email</td>
        <td><input type="text" name="email_calon"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td><input type="submit" name="save"></td>
    </tr>
</table></form>


