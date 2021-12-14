
        @extends('layout.ceria')
        @section('title', 'DETAIL ABSEN PEGAWAI')

        @section('isikonten')
        <h3>Detail Absen Pegawai</h3>
        <a href="/absen"> Kembali</a>
	    <br/>
	    <br/>
        @foreach($absen as $a)
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $a->a_ID }}">
            <br/>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="id">ID</label>
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col-md-4">
                    <label id="id">{{ $a->a_ID }}</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="id">IDPegawai</label>
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col-md-4">
                    <label id="id">{{ $a->a_IDPegawai }}</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="dtpickerdemo">Tanggal</label>
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col-md-4">
                    <label id="dtpickerdemo">{{ $a->a_tanggal }}</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="stat">Status</label>
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col-md-4">
                    <label id="stat">{{ $a->a_status }}</label>
                </div>
            </div>
        @endforeach
        @endsection




