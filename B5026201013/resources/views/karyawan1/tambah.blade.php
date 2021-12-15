
	@extends('layout.ceria')
    @section('title', 'TAMBAH DATA KARYAWAN')

    @section('isikonten')
    <div class="container">
	<h3>Tambah Karyawan</h3>
	<a href="/karyawan1"> Kembali</a>
	<br/>
	<br/>
	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="nip">NIP</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-5">
                <input id="nip" class="form-control" name="nip" required="required">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="nama">Nama</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-5">
                <input id="nama" class="form-control"name="nama" required="required">
            </div>
        </div>
        <br>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="pangkat">Pangkat</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-5">
                <input id="pangkat" class="form-control" name="pangkat" required="required">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="gaji">Gaji</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-5">
                <input id="gaji" class="form-control" name="gaji" required="required">
                <br>
                <br>
                <button type="submit" value="Simpan Data" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
        <br>

	</form>
</div>
@endsection


