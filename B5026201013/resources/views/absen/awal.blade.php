<!DOCTYPE html>
<html>
<head>
    <!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>ABSEN PEGAWAI</title>
</head>

<body class="container">
    @extends('layout.ceria')
    @section('title', 'ABSEN PEGAWAI')
    @section('isikonten')

    <h3>Data Pegawai</h3>
	<a href="/absen/nambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->a_ID }}</td>
			<td>{{ $a->a_IDPegawai }}</td>
			<td>{{ $a->a_tanggal }}</td>
			<td>{{ $a->a_status }}</td>
			<td>
				<a href="/absen/ngedit/{{ $a->a_ID }}" class="btn btn-warning">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->a_ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection
</body>
</html>
