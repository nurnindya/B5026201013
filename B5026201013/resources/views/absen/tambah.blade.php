
        @extends('layout.ceria')
        @section('title', 'TAMBAH ABSEN PEGAWAI')
        @section('isikonten')

        <h3>Absen Pegawai</h3>
        <a href="/absen"> Kembali</a>
        <br/>
        <br/>
        <form action="/absen/store" method="post">
		{{ csrf_field() }}
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="peg">Pegawai</label>
                </div>
            <div class="col-md-4">
                <select id="peg" class="form-control" name="IDPegawai" required="required">
                    @foreach($pegawai as $a)
                    <option value="{{ $a->pegawai_id }}">
                        {{ $a->pegawai_nama }}
                    </option>
                    @endforeach
                </select>
            </div>
            </div>
            <br>
            <div class="form grup row mt-2">
                <div class="col-md-2">
                    <label for="dtpickerdemo" class="control-label">Tanggal</label>
                </div>
                <div class="col-md-10">
                <div class="col-sm-5 input-group date" id="dtpickerdemo">
                    <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar">
                        </span>
                    </span>
                </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="stat">Status</label>
                </div>
                <div class="col-md-4">
                    <input type="radio" id="hadir" name="status" value="H">
                    <label for="hadir">HADIR</label><br>
                    <input type="radio" id="tidak" name="status" value="T" checked="checked">
                    <label for="tidak">TIDAK HADIR</label>
                    <br>
                    <br>
                    <button class="btn btn-success" type="submit" value="Simpan Data">Simpan Data</button>

                </div>
            </div>

        </form>
        @endsection
