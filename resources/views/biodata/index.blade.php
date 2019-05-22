@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
            <h3>List Biodata Siswa</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{ route('biodata.create') }}">Create New Biodata</a>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

        <table class="table table-hover table-sm">
            <tr>
                <th width = "50px"><b>No.</b></th>
                <th width = "150px"><b>NIS</b></th>
                <th width = "300px"><b>Nama Siswa</b></th>
                <th width = "100px"><b>Rombel</b></th>
                <th width = "100px"><b>Jenis Kelamin</b></th>
                <th>Alamat Siswa</th>
                <th width = "180px">Action</th>
            </tr>

        @foreach ($biodatas as $biodata)
            <tr>
                <td><b>{{++$i}}.</b></td>
                <td>{{$biodata->nis}}</td>
                <td>{{$biodata->namaSiswa}}</td>
                <td>{{$biodata->rombelSiswa}}</td>
                <td>{{$biodata->jkSiswa}}</td>
                <td>{{$biodata->alamatSiswa}}</td>
                <td>
                    <form action="{{ route('biodata.destroy', $biodata->id) }}" method="post">
                        <a class="btn btn-sm btn-success" href="{{route('biodata.show',$biodata->id)}}">Show</a>
                        <a class="btn btn-sm btn-warning" href="{{route('biodata.edit',$biodata->id)}}">Edit</a>
                        {{csrf_field()}}
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>

{!! $biodatas->links() !!}
    </div>
@endsection