@extends('layout.master')

@section('content')
<div class="container">
<form action= "" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Jurusan</label>
    <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
</form>
</div>
@endsection