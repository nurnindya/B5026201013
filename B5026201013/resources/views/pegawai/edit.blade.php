
	@extends('layout.ceria')
    @section('title', 'EDIT DATA SEPEDA')

    @section('isikonten')
	<h3>Edit Pegawai</h3>
	<a href="/pegawai"> Kembali</a>
	<br/>
	<br/>
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="nama">Nama</label>
            </div>
            <div class="col-md-4">
                <input id="nama" class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="jabatan">Jabatan</label>
            </div>
            <div class="col-md-4">
                <input id="jabatan" class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="umur">Umur</label>
            </div>
            <div class="col-md-4">
                <input id="umur" class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="alamat">Alamat</label>
            </div>
            <div class="col-md-4">
                <textarea id="alamat" class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            <br>
            <br>
            <button type="submit" value="Simpan Data" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
	</form>
	@endforeach
    @endsection
