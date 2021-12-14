
@extends('layout.ceria')
@section('isikonten')
    <h3>Detail Data Pegawai</h3>
	<a href="/pegawai"> Kembali</a>
	<br/>
	<br/>
    @foreach($pegawai as $p)
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
    <br>
    <div class="row mt-2">
        <div class="col-md-2">
            <label for="nama">Nama</label>
        </div>
        <div class="col-md-1">
            :
        </div>
        <div class="col-md-4">
            <label id="nama">{{ $p->pegawai_nama }}</label>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-2">
            <label for="jabatan">Jabatan</label>
        </div>
        <div class="col-md-1">
            :
        </div>
        <div class="col-md-4">
            <label id="jabatan">{{ $p->pegawai_jabatan }}</label>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-2">
            <label for="umur">Umur</label>
        </div>
        <div class="col-md-1">
            :
        </div>
        <div class="col-md-4">
            <label id="umur">{{ $p->pegawai_umur }}</label>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-2">
            <label for="alamat">Alamat</label>
        </div>
        <div class="col-md-1">
            :
        </div>
        <div class="col-md-4">
            <label id="alamat">{{ $p->pegawai_alamat }}</label>
        </div>
    </div>
@endforeach
@endsection

