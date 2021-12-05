<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Pegawai</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body class="container">
        @extends('layout.ceria')
        @section('title', 'ABSEN PEGAWAI')
        @section('isikonten')

        <h3>Absen Pegawai</h3>
        <a href="/absen"> Kembali</a>
        <br/>
        <br/>

            <form action="/absen/save" method="post">
		    {{ csrf_field() }}
            <div class="row mt-2">
                <div class="col-2">
                Pegawai
            </div>
            <div class="col-4">
                <select id="IDPegawai" name="IDPegawai" required="required">
                    @foreach($pegawai as $a)
                    <option value="{{ $a->pegawai_id }}">
                        {{ $a->pegawai_nama }}
                    </option>
                    @endforeach
                </select>
            </div>
            </div>

            <div class="form grup row mt-2">
                <div class="col-2">
                    <label for="dtpickerdemo" class="control-label">Tanggal</label>
                </div>
                <div class="col-sm-4 input-group date" id="dtpickerdemo">
                        <input type='text' class="form-control" name="tanggal" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar">
                            </span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                    });
                </script>
                <br>

            <div class="row mt-2">
                <div class="col-2">
                    Status
                </div>
                <div class="col-4">
                    <input type="radio" id="hadir" name="status" value="H">
                    <label for="hadir">HADIR</label><br>
                    <input type="radio" id="tidak" name="status" value="T" checked="checked">
                    <label for="tidak">TIDAK HADIR</label><br>

                </div>
            </div>
            <button class="btn-primary submit" type="submit" value="Simpan Data">Simpan Data</button>
        </form>
        @endsection


</body>
</html>
