<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pendaftaran Kuota Internet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".submit").click(function(){
                    var namamhs = $(".nama").val();
                    var huruf = /^[a-zA-Z\s]+$/;
                    if (!namamhs.match(huruf) || namamhs.length == 1) {
                        alert("Nama Mahasiswa harus alphabet dan tidak boleh hanya 1 huruf")
                        return false;
                    }
                    var nrpmhs = $(".nrp").val();
                    if (isNaN(nrpmhs) || nrpmhs.length != 10) {
                        alert("NRP mahasiswa harus angka dan 10 digit")
                        return false;
                    }
                    var jurusanmhs = $(".jurusan").val();
                    if (jurusanmhs == "") {
                        alert("Silahkan Pilih Jurusan Anda")
                        return false;
                    }

                    var nomorhp = $(".nomor").val();
                    if (isNaN(nomorhp) || nomorhp.length < 10) {
                        alert("Nomor Handphone harus angka dan minim 10 digit")
                        return false;
                    }
                })
            })
        </script>
        <style>
            body {
                margin: 50px auto;
                background-color: khaki;
            }
            p {
                text-align: left;
            }
            h2 {
                text-align: center;
            }
            .container {
                background-color:yellowgreen;
                align-items:center;
                justify-content: center;
                padding: 30px;
            }
            label {
                width:400px;
                text-align:right;
                margin-right: 20px;
                font-size: 20px;
            }
            .submit, .reset {
                width: 150px
            }
        </style>
    </head>

    <body>
        <div class="container">
            <p>Nur Nindya Risnina</p>
            <p>Nindya</p>
            <p>5026201013</p>
            <h2>Form Pendaftaran Kuota Internet</h2><br>
            <form action="https://www.google.co.id/" name="Pendaftaran Kuota Internet">
            <div class="row mt-3">
                <div class="col-5">
                    <label>Nama Mahasiswa :</label>
                </div>
                <div class="col-5">
                    <input class="nama" type="text" size="50" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>NRP Mahasiswa :</label>
                </div>
                <div class="col-5">
                    <input class="nrp" size="50" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Jurusan :</label>
                </div>
                <div class="col-5">
                    <select class="jurusan required">
                        <option value="">Pilih Jurusan</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Elektro">Elektro</option>
                        <option value="Informatika">Informatika</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Nomor Handphone :</label>
                </div>
                <div class="col-5">
                    <input class="nomor" size="50" required>
                </div>
            </div>
            <br>
            <div class="button mt-3 text-center">
                    <button class="btn-primary submit mr-3" type="submit">Submit</button>
                    <button class="btn-danger reset" type="reset">Reset</button>
            </div>
            </form>


    </body>

</html>
