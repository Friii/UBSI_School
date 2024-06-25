
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="login">

    <!-- Outer Row -->
    <div class="left">

        <div class=" col-lg-7 ">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg"></div> -->
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="">LOGIN</h1>
                                    <h3 class="">UBSI SCHOOL</h3>
                                    <h3>SIGN IN YOUR ACCOUNT</h3>
                                    </div>
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
                                <hr>
                                </div>
                                <div class="tambah">
                                    <a class="small" href="<?= base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>
                                </div>
                                </div>
                                </div>
                                <div class="kiri">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>    
</body>
</html>


