
        @extends('layout.ceria')
        @section('title', 'EDIT ABSEN PEGAWAI')

        @section('isikonten')
        <h3>Edit Pegawai</h3>
        <a href="/absen"> Kembali</a>
	    <br/>
	    <br/>
        <!-- <h1>{{ $judul }}</h1> -->
        @foreach($absen as $a)
        <form action="/absen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $a->a_ID }}">
            <br/>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="peg">Pegawai</label>
                </div>
                <div class="col-md-4">
                    <select id="peg" class="form-control" name="IDPegawai" required="required">
                        @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->a_IDPegawai) selected="selected" @endif>
                            {{ $p->pegawai_nama }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group row mt-2">
                <div class="col-md-2">
                    <label for="dtpickerdemo">Tanggal</label>
                </div>
                <div class="col-md-10">
                <div class='col-sm-5 input-group date class="control-label' id='dtpickerdemo' class="control-label">
                    <input type='text' class="form-control" name="tanggal" value="{{ $a->a_tanggal }}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                </div>
            </div>
            <script type="text/javascript">
            $(function () {
                $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date()});
            });
            </script>
            <br>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="stat">Status</label>
                </div>
                <div class="col-md-4">
                    <input type="radio" id="hadir" name="status" value="H" @if ($a->a_status === "H") checked="checked" @endif>
                    <label for="hadir">HADIR</label>
                    <input type="radio" id="tidak" name="status" value="T" @if ($a->a_status === "T") checked="checked" @endif>
                    <label for="tidak">TIDAK HADIR</label><br>
                    <br>
                    <br>
                    <button class="btn btn-success" type="submit" value="Simpan Data">Simpan Data</button>
                </div>
            </div>
        </form>
        @endforeach
        @endsection




