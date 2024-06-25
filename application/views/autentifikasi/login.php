
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/logiin.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="login">
    
<div class="right">
    <img src = "<?= base_url('assets/img/logo1.png')  ?>">
 </div>

    <div class="left">
        <h1>LOGIN</h1>
        <h3>UBSI SCHOOL</h3>
         <h3>SIGN IN YOUR ACCOUNT</h3>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                    <div class="group">
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" name="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-user btn-block">
                                         Masuk
                                    </button>

                                </form>
                                 <p>Belum punya akun?</p>
                                    <a class="small" href="<?= base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>

            

        </div>

    </div>

</div>    
</body>
</html>


