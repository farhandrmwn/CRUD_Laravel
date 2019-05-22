@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Edit Biodata Siswa</h3>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whooops! </strong> There where some problems with your input.<br>
            <ul>
                @foreach($errors as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('biodata.update',$biodata->id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <strong>NIS :</strong>
                    <input type="text" name="nis" class="form-control" value="{{$biodata->nis}}">
                </div>
                <div class="col-md-12">
                    <strong>Nama Siswa :</strong>
                    <input type="text" name="namaSiswa" class="form-control" value="{{$biodata->namaSiswa}}">
                </div>
                <div class="col-md-12">
                    <strong>Rombel :</strong>
                    <input type="text" name="rombelSiswa" class="form-control" value="{{$biodata->rombelSiswa}}">
                </div>
                <div class="col-md-12">
                    <strong>Jenis Kelamin :</strong>
                    <input type="text" name="jkSiswa" class="form-control" value="{{$biodata->jkSiswa}}">
                </div>
                <div class="col-md-12">
                    <strong>Alamat Siswa :</strong>
                    <textarea class="form-control"  name="alamatSiswa" id="" cols="80" rows="8">{{$biodata->alamatSiswa}}</textarea>
                </div>
                <div class="col-md-12">
                    <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>  
            </div>
        </form>

    </div>



@endsection