
	@extends('layout.ceria')
    @section('title', 'TAMBAH DATA PEGAWAI')

    @section('isikonten')
	<h3>Tambah Pegawai</h3>
	<a href="/pegawai"> Kembali</a>
	<br/>
	<br/>
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="nama">Nama</label>
            </div>
            <div class="col-md-4">
                <input id="nama" class="form-control" type="text" name="nama" required="required">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="jabatan">Jabatan</label>
            </div>
            <div class="col-md-4">
                <input id="jabatan" class="form-control" type="text" name="jabatan" required="required">
            </div>
        </div>
        <br>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="umur">Umur</label>
            </div>
            <div class="col-md-4">
                <input id="umur" class="form-control" type="text" name="umur" required="required">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="alamat">Alamat</label>
            </div>
            <div class="col-md-4">
                <textarea id="alamat" class="form-control" name="alamat" required="required"></textarea>
                <br>
                <br>
                <button type="submit" value="Simpan Data" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
	</form>
    @endsection

