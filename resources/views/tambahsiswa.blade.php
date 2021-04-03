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
                <div class="col-6 float-right">
             <!-- Button trigger modal -->
            <button  type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                    <form action = "/simpan" method="post">
                    @csrf
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" placeholder="Alamat" rows="3"></textarea>
                        </div>
                        

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    </div>

                </div>
            </div>
                </div> 
    </div>
   

    <table class='table table-hover'>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tampil as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->agama }}</td>
                <td>{{ $data->alamat }}</td>
                <td><a href="{{URL::to('/tambahdetail/'.$data->id)}}">Tambah Detail</a></td>
                </tr>
        </tbody>
            @endforeach
    </table>

</div>

</body>

@endsection