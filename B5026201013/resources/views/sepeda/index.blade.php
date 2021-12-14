<!DOCTYPE html>
<html>
<head>
	<title>DATA SEPEDA</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="container">
    @extends('layout.ceria')
    @section('title', 'DATA SEPEDA')
    @section('judulhalaman', 'DATA SEPEDA')

    @section('isikonten')
	<h3>Data Sepeda</h3>
	<a href="/sepeda/tambah" class="btn btn-primary"> + Tambah Sepeda Baru</a>
	<br/>
	<br/>
    <p align="center">Cari Data Sepeda Berdasarkan Merk:</p>
    <form action="/sepeda/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Sepeda .." value="{{ old('cari') }}">
        <input class="form-control btn-success" type="submit" value="CARI">
    </form>
    <br>
    <br>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
            <th>Kode Sepeda</th>
            <th>Merk Sepeda</th>
            <th>Stock Sepeda</th>
            <th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($sepeda as $s)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->kodesepeda }}</td>
            <td>{{ $s->merksepeda }}</td>
			<td>{{ $s->stocksepeda }}</td>
            <td>{{ $s->tersedia }}</td>
			<td>
                <a href="/sepeda/detail/{{ $s->kodesepeda }}" class="btn btn-info">View Detail</a>
                |
                <a href="/sepeda/edit/{{ $s->kodesepeda }}" class="btn btn-warning">Edit</a>
				|
                <a href="/sepeda/hapus/{{ $s->kodesepeda }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $sepeda->links()  }}
    @endsection
</body>
</html>
