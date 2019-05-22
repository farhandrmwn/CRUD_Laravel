@extends('template/t_index')

@section('content')

<div class="container">
    <p></p>
    <div class="card">
        <div class="card-header">Tambah Data</div>
        <div class="card-body">
            <form action="/prosestambah" method="post">
               Nama :
               <input type="text" name="nama" placeholder="nama" class="form-control">
               Alamat :
               <input type="text" name="alamat" class="form-control" placeholder="alamat">
               Kelas :
               <input type="text" name="kelas" class="form-control" placeholder="kelas">
               <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

@endsection
