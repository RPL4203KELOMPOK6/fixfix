@extends('dashboard')

@section('content')
<div class="card-header">
    <h3 class="card-title">List Album</h3>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 60px; text-align: center">Nama</th>
                    <th style="text-align: center">Penyanyi</th>
                    <th style="text-align: center">Harga</th>
                    <th style="text-align: center">Gambar</th>
                    <th style="text-align: center">Deskripsi</th>
                    <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($album as $key => $album)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $album -> nama }} </td>
                        <td> {{ $album -> penyanyi }} </td>
                        <td> {{ $album -> harga }} </td>
                        <td> <img class="card-img-top" src="/image/{{ $album -> gambar }}" style="width:200px;height:200px;"> </td>
                        <td> {{ $album -> deskripsi }} </td>
                        <td style="display:flex;">
                            <a href="/admin/dataalbum/{{$album->id}}" class="btn btn-info btn-sm">show</a>
                            <a href="/admin/dataalbum/{{$album->id}}/edit" class="btn btn-default btn-sm">edit</a> 
                            <form action="/admin/dataalbum/{{$album->id}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form> 
                        </td>       
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

@endsection       
