
	@extends('layout.ceria')
    @section('title', 'EDIT DATA SEPEDA')

    @section('isikonten')
	<h3>Edit DATA SEPEDA</h3>
	<a href="/sepeda"> Kembali</a>
	<br/>
	<br/>
	@foreach($sepeda as $s)
	<form action="/sepeda/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $s->kodesepeda }}"> <br/>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="kode">Kode Sepeda</label>
            </div>
            <div class="col-md-5">
                <input id="kode" class="form-control" type="text" required="required" name="kode" value="{{ $s->kodesepeda }}">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="merk">Merk Sepeda</label>
            </div>
            <div class="col-md-5">
                <input id="merk" class="form-control" type="text" required="required" name="merk" value="{{ $s->merksepeda }}">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="stock">Stock Sepeda</label>
            </div>
            <div class="col-md-5">
                <input id="stock" class="form-control" type="number" required="required" name="stock" value="{{ $s->stocksepeda }}">
            </div>
        </div>
        <br>
		<div class="row mt-2">
            <div class="col-md-2">
                <label for="t">Tersedia</label>
            </div>
            <div class="col-md-5">
                <input type="radio" id="tersedia" name="tersedia" value="Y" @if ($s->tersedia === "Y") checked="checked" @endif>
                <label for="tersedia">TERSEDIA</label><br>
                <input type="radio" id="tidak" name="tersedia" value="N" @if ($s->tersedia === "N") checked="checked" @endif>
                <label for="tidak">TIDAK TERSEDIA</label>
                <br>
                <br>
                <button type="submit" value="Simpan Data" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
	</form>
	@endforeach
    @endsection
</body>
</html>
