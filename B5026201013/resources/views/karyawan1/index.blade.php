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
    @section('title', 'DATA KARYAWAN')
    @section('judulhalaman', 'DATA KARYAWAN')

    @section('isikonten')
	<h3>Data Sepeda</h3>
	<a href="/karyawan1/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
	<br/>
	<br/>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->NIP }}</td>
            <td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
            <td>{{ $k->Gaji }}</td>
			<td>
                <a href="/karyawan1/hapus/{{ $k->NIP }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach

	</table>
    @endsection
</body>
</html>
