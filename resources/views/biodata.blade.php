@extends('layout.master')

@section('content')
<head>
	<title>Biodata Siswa</title>
</head>
<body>
<div class="container">
<h1>Detail Siswa</h1>
<table class="table table-hover">
    
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Kelas & Jurusan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($join as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->agama }}</td>
            <td>{{ $data->kelas }} - {{ $data->jurusan }}</td>
            </tr>
    </tbody>
        @endforeach
</table>
</div>
</body>
@endsection
