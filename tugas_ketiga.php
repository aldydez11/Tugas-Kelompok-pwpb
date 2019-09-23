<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tugas PWPB</title>
    <style type="text/css">
        html {
            background:url(img/blue.jpg) no-repeat;
            background-size: 100% 100%;
        }
        .footer {
            text-align: center;
            font-family: arial;
            font-size: 20px;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
            border: 2px solid black;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table,
        #button {
            position: relative;
            left: 235px;
        }

        table {
            margin-top: 100px;
        }

        #button {
            margin-top: 50px;

        }
        h2 {
            text-align: center;
            font-family: arial;
            font-size: 20px;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
            border: 2px solid black;
        }
    </style>
    <!-- Custom styles for this template -->
</head>

<body>
    <!-- CONTENT -->
    <div class="container">
            <form action="form.php" method="post">
                <h2 class="h2">DATA IDENTITAS PESERTA DIDIK BARU</h2>
                <h2 class="h2_2">2019/2020</h2>
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nm"></td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>:</td>
                        <td><input type="text" name="np"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="radio" value="laki-laki">Laki-laki
                            <input type="radio" name="radio" value="perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><input type="text" name="agm"></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><input type="text" name="nisn"></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" name="nik"></td>
                    </tr>
                    <tr>
                        <td>Tempat dan Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat-lh" size="10">
                            <select name="Tgl">
                                <option name="Tgl">Tgl
                                <option name="Tgl">1</option>
                                <option name="Tgl">2</option>
                                <option name="Tgl">3</option>
                                <option name="Tgl">4</option>
                                <option name="Tgl">5</option>
                                <option name="Tgl">6</option>
                                <option name="Tgl">7</option>
                                <option name="Tgl">8</option>
                                <option name="Tgl">9</option>
                                <option name="Tgl">10</option>
                                <option name="Tgl">11</option>
                                <option name="Tgl">12</option>
                                <option name="Tgl">13</option>
                                <option name="Tgl">14</option>
                                <option name="Tgl">15</option>
                                <option name="Tgl">16</option>
                                <option name="Tgl">17</option>
                                <option name="Tgl">18</option>
                                <option name="Tgl">19</option>
                                <option name="Tgl">20</option>
                                <option name="Tgl">21</option>
                                <option name="Tgl">22</option>
                                <option name="Tgl">23</option>
                                <option name="Tgl">24</option>
                                <option name="Tgl">26</option>
                                <option name="Tgl">27</option>
                                <option name="Tgl">28</option>
                                <option name="Tgl">29</option>
                                <option name="Tgl">30</option>
                                <option name="Tgl">31</option>
                            </select>
                            <select name="Bln">
                                <option name="Bln">Bln</option>
                                <option name="Bln">Januari</option>
                                <option name="Bln">Februari</option>
                                <option name="Bln">Maret</option>
                                <option name="Bln">April</option>
                                <option name="Bln">Mei</option>
                                <option name="Bln">Juni</option>
                                <option name="Bln">Juli</option>
                                <option name="Bln">Agustus</option>
                                <option name="Bln">September</option>
                                <option name="Bln">Oktober</option>
                                <option name="Bln">November</option>
                                <option name="Bln">Desember</option>
                            </select>
                            <select name="Thn">
                                <option name="Thn">Thn</option>
                                <option name="Thn">2012</option>
                                <option name="Thn">2011</option>
                                <option name="Thn">2010</option>
                                <option name="Thn">2009</option>
                                <option name="Thn">2008</option>
                                <option name="Thn">1993</option>
                                <option name="Thn">1992</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><input type="text" name="asal-sekolah"></td>
                    </tr>
                    <tr>
                        <td>Nomor SKHU</td>
                        <td>:</td>
                        <td><input type="text" name="skhu"></td>
                    </tr>
                    <tr>
                        <td>Tanggal diterima disekolah ini</td>
                        <td>:</td>
                        <td><input type="date" name="tds"></td>
                    </tr>
                    <tr>
                        <td>Jika Pindahan, Sebutkan Alasan Pindah ke Sekolah ini</td>
                        <td>:</td>
                    </tr>
                    <tr>
                        <td><textarea name="als" cols="40" rows="5" placeholder="Alasan kamu pindah ke sekolah ini...."></textarea></td>
                    </tr>
                    <tr>
                        <td>Alamat :</td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td><textarea name="almt" cols="40" rows="5" placeholder="Alamat kamu...."></textarea></td>
                    </tr>
                    <tr>
                        <td>Tinggal Bersama</td>
                        <td>:</td>
                        <td><input type="text" name="tb"></td>
                    </tr>
                    <tr>
                        <td>Transportasi ke Sekolah</td>
                        <td></td>
                        <td>
                            <input type="text" name="tsp">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><input type="tel" name="telp"></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><input type="tel" name="hp"></td>
                    </tr>
                    <tr>
                        <td>Nomor Kartu Perlindungan Sosial (bagi yang memiliki)</td>
                        <td>:</td>
                        <td><input type="text" name="kps"></td>
                    </tr>
                    <tr>
                        <td><strong>Data Ayah Kandung</strong> :</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nm-a"></td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tl-a"></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><input type="text" name="pd-a"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input type="text" name="pk-a"></td>
                    </tr>
                    <tr>
                        <td>Data Ibu Kandung :</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nm-i"></td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tl-i"></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><input type="text" name="pd-i"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input type="text" name="pk-i"></td>
                    </tr>
                </table>
                <div id="button">
                    <input class="btn btn-outline-success" type="submit" name="sbmt" value="Simpan">
                    <input class="btn btn-outline-success" type="reset" name="rst" value="Batal">
                </div>
            </form>
        </div>
    </div>
    <br>
    <!-- END OF CONTENT --> 
    <div class="container">
        <footer class="footer">
            <div class="row">
                <div class="col">
                    <small class="copyright">&copy; 2019</small>
                    <p class="lead">PWPB_XI_RPL_2</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>