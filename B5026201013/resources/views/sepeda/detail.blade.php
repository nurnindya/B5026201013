
    @extends('layout.ceria')
    @section('title', 'DETAIL SEPEDA')

    @section('isikonten')
	<h3>Detail Sepeda</h3>
	<a href="/sepeda"> Kembali</a>
	<br/>
	<br/>
        @foreach($sepeda as $s)
        {{ csrf_field() }}
        <input type="hidden" name="kode" value="{{ $s->kodesepeda }}">
        <br/>
        <div class="container">
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="kode">Kode Sepeda</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-4">
                <label id="kode">{{ $s->kodesepeda }}</label>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="merk">Merk Sepeda</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-4">
                <label id="merk">{{ $s->merksepeda }}</label>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="stock">Stock Sepeda</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-4">
                <label id="stock">{{ $s->stocksepeda }}</label>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="tersedia">Tersedia</label>
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-4">
                <label id="tersedia">{{ $s->tersedia }}</label>
            </div>
        </div>
    </div>
	@endforeach
    @endsection


