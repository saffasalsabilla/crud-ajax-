<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link bootstraps -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- link datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    
</head>
<body>
    
    <nav class="navbar navbar-light" style="background-color: #2975e6; height: 50px;">Starbhak</nav>

    <div class="container" style="margin-top:30px;" >
            <h3 style="text-align: center;">Data Siswa</h3> <br><br>
            <form method="post" class="form-data" id="form-data">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="hidden" name="id" id="id">
                            <input type="text" name="nama_siswa" class="form-control" required="true">
                            <p class="text-danger" id="err_nama_siswa"></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control" required="true">
                                <option value=""></option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaring</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="Broadcasting">Broadcasting</option>
                                <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                            </select>
                            <p class="text-danger" id="err_jurusan"></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" id="err_tgl_masuk" required="true">
                            <p class="text-danger" id="err_tgl_masuk"></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Kelamin</label> <br>
                            <input type="radio" name="jkl" id="jkl1" value="Laki-laki" required="true">  Laki-Laki
                            <input type="radio" name="jkl" id="jkl2" value="Perempuan">  Perempuan
                        </div>
                            <p class="text-danger" id="err_jkl"></p>
                    </div>
                </div>
                <div class="form-group">
                    <labe>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                    <p class="text-danger" id="err_alamat"></p>
                
                </div>
                <div class="form-group">
                    <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                
                </div>
            </form>    
            <hr>

            <div class="data"></div>

        </div>

       <!-- data siswa -->
       
      

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.data').load("data.php");
            $("#simpan").click(function(){
                var data = $('.form-data').serialize();
                var jkl1 = document.getElementById("jkl1").value;
                var jkl2 = document.getElementById("jkl2").value;
                var nama_siswa = document.getElementById("nama_siswa").value;
                var tgl_masuk = document.getElementById("tgl_masuk").value;
                var alamat = document.getElementById("alamat").value;
                var jurusan = document.getElementById("jurusan").value;

                if (nama_siswa=="") {
                    document.getElementById("err_nama_siswa").innerHTML = "Nama Siswa Harus Diisi";
                } else {   
                    document.getElementById("err_nama_siswa").innerHTML = "";
                }
                if (alamat=="") {
                    document.getElementById("err_alamat").innerHTML = "Alamat Siswa Harus Diisi";
                } else {
                    document.getElementById("err_alamat").innerHTML = "";
                }
                if(jurusan=="") {
                    document.getElementById("err_jurusan").innerHTML = "JurusanSiswa Harus Diisi";
                } else {
                    document.getElementById("err_jurusan").innerHTML = "";
                }
                if(tgl_masuk=="") {
                    document.getElementById("err_tgl_masuk").innerHTML = "Tanggal Masuk Siswa Harus Diisi";
                } else {
                    document.getElementById("err_tgl_masukt").innerHTML = "";
                }
                if(document.getElementById("jkl1").checked==false && document.getElementById("jkl2").checked==false) {
                    document.getElementById("err_jkl").innerHTML = "Jenis Kelamin Siswa Harus Dipilih";
                }else {
                    document.getElementById("err_jkl").innerHTML = "";
                }
                if (nama_siswa!=="" && tgl_masuk!=="" && alamat!="" && jurusan!="" && (document.getElementById("jkl1").checked==true || document.getElementById("jkl2").checked==true))
                {
                    
                }
            }
        }

    </script>

</body>
</html>