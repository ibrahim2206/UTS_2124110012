<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manajemen penulis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<h4>Manajemen penulis</h4>
<a href="{{ route('penulis.create') }}" class="btn btn-primary">Tambah</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nama_penulis</th>
            <th>hasil_karya</th>
            <th>penerbit</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penulis2 as $row)
            <tr>
                <td>{{ $row['nama_penulis'] }}</td>
                <td>{{ $row['hasil_karya'] }}</td>
                <td>{{ $row['penerbit'] }}</td>
            </tr>
    </tbody>
</table>
</html>