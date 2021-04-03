@extends('layout.master')

@section('content')
<head>
	<title>Tambah Siswa</title>
</head>

<body>

<div class="container">


    <div class="row-3">
        <div class="col-6">
            <h1>Data Siswa</h1>
        </div>
               
    </div>
   

    <table class='table table-hover'>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Kelas & Jurusan</th>
                <th>Aksi</th>
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
                <td>{{ $data->kelas }} - {{$data->jurusan}}</td>
                <td><a href="/siswa/{{$data->id}}/edit">Edit</a></td>
                </tr>
        </tbody>
            @endforeach
    </table>

</div>

</body>

@endsection