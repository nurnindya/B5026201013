<!DOCTYPE html>
<html>
<head>
    <title>DATA PEGAWAI</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body class="container">
@extends('layout.ceria')
@section('title', 'DATA PEGAWAI')
@section('judulhalaman', 'DATA PEGAWAI')

@section('isikonten')
    <h3>Data Pegawai</h3>
    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
	<br/>
	<br/>
    <p align="center">Cari Data Pegawai Berdasarkan Nama atau Alamat:</p>
    <form action="/pegawai/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input class="form-control btn-success" type="submit" value="CARI">
    </form>
    <br>
    <br>
    <table class="table table-success table-striped">
		<tr>
            <th width="10px">No</th>
			<th width="100px">Nama</th>
			<th width="200px">Alamat</th>
			<th width="150px">Opsi</th>
		</tr>
        @foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>

			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-info">View Detail</a>
                |
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links()  }}
@endsection
</body>
</html>
