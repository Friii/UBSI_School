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

    <form method="post">
        <label for="nama">Nama Calon:</label>
        <input type="text" id="namacalon" name="namacalon" placeholder="Nama Calon">
        <br>
        <label for="nomor">Nomor Telepon:</label>
        <input type="text" id="nomortelepon" name="nomortelepon">
        <br>
        <label for="alamat">Alamat Email:</label>
        <input type="text" id="alamatemail" name="alamatemail">
        <br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    </div>


