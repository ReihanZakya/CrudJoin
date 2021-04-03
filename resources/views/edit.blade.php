@extends('layout.master')

@section('content')
<head>
	<title>Tambah Siswa</title>
</head>

<body>

<!-- Karena Error Terus Jadi Menyerah Aja Yang Penting Join Nya Udah Berhasil -->

<div class="container">


    <div class="row-3">
        <div class="col-6">
            <h1>Data Siswa</h1>
        </div>
                <div class="col-lg-12">
                    
                    <form action = "/siswa/{{$siswa->id}}/update" method="post">
                    @csrf
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$siswa->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="Laki-laki" @if($siswa->jenis_kelami == 'Laki-laki') selected @endif>Laki-laki</option>
                            <option value="Perempuan" @if($siswa->jenis_kelami == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" placeholder="Alamat" rows="3" >{{$siswa->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kelas</label>
                            <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelas" value="{{$siswa->kelas}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurursan" value="{{$siswa->jurusan}}">
                        </div>
                        

                        </div>
                        <div class="modal-footer">
                        <button type="submit" value="simpan" class="btn btn-primary">Update</button>
                    </form>
                    </div>
                </div>

    </div>
   


</div>

</body>

@endsection