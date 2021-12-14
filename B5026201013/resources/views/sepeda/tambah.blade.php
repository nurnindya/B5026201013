
	@extends('layout.ceria')
    @section('title', 'TAMBAH DATA SEPEDA')

    @section('isikonten')
    <div class="container">
	<h3>Tambah Sepeda</h3>
	<a href="/sepeda"> Kembali</a>
	<br/>
	<br/>
	<form action="/sepeda/store" method="post">
		{{ csrf_field() }}
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="kode">Kode Sepeda</label>
            </div>
            <div class="col-md-5">
                <input id="kode" class="form-control" type="text" name="kode" required="required">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="merk">Merk Sepeda</label>
            </div>
            <div class="col-md-5">
                <input id="merk" class="form-control" type="text" name="merk" required="required">
            </div>
        </div>
        <br>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="stock">Stock Sepeda</label>
            </div>
            <div class="col-md-5">
                <input id="stock" class="form-control"type="text" name="stock" required="required">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="t">Tersedia</label>
            </div>
            <div class="col-md-5">
                <input type="radio" id="tersedia" name="tersedia" value="Y">
                <label for="tersedia">TERSEDIA</label><br>
                <input type="radio" id="tidak" name="tersedia" value="N" checked="checked">
                <label for="tidak">TIDAK TERSEDIA</label>
                <br>
                <br>
                <button type="submit" value="Simpan Data" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
        <br>

	</form>
</div>
@endsection


