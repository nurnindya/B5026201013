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

<body>
    <div class="container">
    @extends('layout.ceria')
    @section('isikonten')

    <h3>Absen Pegawai</h3>
	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>
	<br/>
	<br/>
    <p align="center">Cari Data Absen Pegawai Berdasarkan Nama:</p>
    <form action="/absen/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Data Absen Pegawai .." value="{{ old('cari') }}">
        <input class="form-control btn-success" type="submit" value="CARI">
    </form>
    <br/>
	<br/>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
            <th>Nama</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->a_tanggal }}</td>
			<td>{{ $a->a_status }}</td>
			<td>
                <a href="/absen/detail/{{ $a->a_ID }}" class="btn btn-info">View Detail</a>
                |
				<a href="/absen/edit/{{ $a->a_ID }}" class="btn btn-warning">Edit</a>
                |
				<a href="/absen/hapus/{{ $a->a_ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links()  }}
</div>
@endsection
</body>
</html>


