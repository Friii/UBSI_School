<style>
    .daftar{
        text-align: center;
    }
    .content{
        display: flex;
        padding-left: 20px;
        gap:20px;
    }
    .wakil_kepala{
        display: flex;
        padding-left:350px;
        gap:20px;
    }
    .wakil1, .wakil2{
        padding-top:10px;
        margin-bottom: 20px;
        border-radius:10px;
        box-shadow: 5px 5px 20px black;
        background-color: #0275d8;
        padding-left: 15px;
        padding-right: 15px;

    }
    .kepala_sekolah{
        display: block;
        border: 1px solid black;
        margin:auto;
        width: 200px;
        padding-top:10px;
        margin-bottom: 20px;
        border-radius:10px;
        box-shadow: 5px 5px 20px black;
        background-color: #0275d8;
        
    }
    .guru{
        display: block;
        padding-top:10px;
        margin-bottom: 20px;
        border-radius:10px;
        box-shadow: 5px 5px 20px black;
        background-color: #0275d8;
        padding-left: 15px;
        padding-right: 15px;
    }
    img{
        width: 170px;
        height: 170px;
    }
</style>
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Guru
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="daftar">
        <div class="kepala_sekolah">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Kepala Sekolah</p>
            </div>
        <div class="wakil_kepala">
            <div class="wakil1">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="rounded mx-auto d-block w-100" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Wakil Kepala Sekolah</p>
            </div>
            <div class="wakil2">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="rounded mx-auto d-block w-100" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Wakil Kepala Sekolah</p>
            </div>
        </div>
        <div class="content">
            <div class="guru">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="rounded mx-auto d-block w-100" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Guru</p>
            </div>
            <div class="guru">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="rounded mx-auto d-block w-100" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Guru</p>
            </div>
            <div class="guru">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="rounded mx-auto d-block w-100" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Guru</p>
            </div>
            <div class="guru">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="rounded mx-auto d-block w-100" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Guru</p>
            </div>
            <div class="guru">
            <img src="<?= base_url().'assets/img/fotocv.png'?>" class="rounded mx-auto d-block w-100" alt="">
            <h4>Fachri Fathurrohman</h4>
            <p>Guru</p>
            </div>
        </div>
    </section>
      
      
 
</div>