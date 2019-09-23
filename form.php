<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <title>Tugas PWPB</title>
    <!-- Bootstrap core CSS -->
    <style>
        blockquote{
            font-weight: 340;
        }
        b{
            font-weight: 500;
        }
        
    </style>
    <!-- Custom styles for this template -->
    </head>
    <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Kelompok 5</h5>
    </nav>
    <a class="btn btn-outline-success" href="index.html">Home</a>
    </div>

<!-- CONTENT -->
    <div class="container">
        <div class="card-body" style="width : 100%;">
            <p class="lead" style="font-size : 50px; text-align: center;">Berikut data yang telah diisi</p>
            <?php if(isset($_POST['sbmt'])):?>
            <div class="card bg-light">
                <div class="card-body">
                <blockquote class="blockquote">
                    <!-- PROSES PHP -->
                    Nama Kamu : <b><?php echo $_POST['nm']; ?></b><br>
                    Nama Panggilan :<?php echo $_POST['np']; ?><br>
                    <?php if(isset($_POST['radio'])): ?>
                        Anda adalah seorang :<b><?php echo $_POST['radio']; ?></b><br>
                    <?php endif; ?>
                    NISN Anda : <b><?php echo $_POST['nisn']; ?></b><br>
                    NIK Anda : <b><?php echo $_POST['nik']; ?></b><br>
                    Anda lahir di <b><?php echo $_POST['tempat-lh']; ?></b>, pada tanggal <b><?php echo $_POST['Tgl']; ?>-<?php echo $_POST['Bln']; ?>-<?php echo $_POST['Thn']; ?></b><br>
                    Asal sekolah : <b><?php echo $_POST['asal-sekolah'];?></b><br>
                    Nomor SKHU : <b><?php echo $_POST['skhu'];?></b><br>
                    Tanggal diterima disekolah ini : <b><?php echo $_POST['tds'];?></b><br>
                    <?php if(!empty($_POST['als'])):?>
                        Alasan pindah ke sekolah ini : <b><?php echo $_POST['als'];?></b>
                    <?php endif; ?>
                    Agama : <b><?php echo $_POST['agm'];?></b><br>
                    Alamat : <b><?php echo $_POST['almt'];?></b><br>
                    Tinggal Bersama : <b><?php echo $_POST['tb'];?></b><br>
                    Transportasi ke Sekolah : <b><?php echo $_POST['tsp']; ?></b><br>
                    No. Telepon : <b><?php echo $_POST['telp']; ?></b><br>
                    No. HP : <b><?php echo $_POST['hp']; ?></b><br>
                    <?php if(!empty($_POST['kps'])):?>
                        Nomor KPS : <b><?php echo $_POST['kps'];?></b>
                    <?php endif; ?>
                    <h5>Data Ayah Kandung</h5>
                    Nama : <b><?php echo $_POST['nm-a']; ?></b><br>
                    Tahun lahir : <b><?php echo $_POST['tl-a'];?></b><br>
                    Pendidikan : <b><?php echo $_POST['pd-a'];?></b><br>
                    Pekerjaan : <b><?php echo $_POST['pk-a'];?></b><br>
                    
                    <h5>Data Ibu Kandung</h5>
                    Nama : <b><?php echo $_POST['nm-i']; ?></b><br>
                    Tahun lahir : <b><?php echo $_POST['tl-i'];?></b><br>
                    Pendidikan : <b><?php echo $_POST['pd-i'];?></b><br>
                    Pekerjaan : <b><?php echo $_POST['pk-i'];?></b><br>
            <?php endif; ?>
                </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF CONTENT -->


<div class="container">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
        <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">&copy; 2019</small>
            <p class="lead">PWPB_XI_RPL_2</p>
        </div>
        </div>
    </footer>
</div>
</body>
</html>
