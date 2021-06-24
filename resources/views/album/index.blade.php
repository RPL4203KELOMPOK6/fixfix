@extends('index')

{{-- @section('title','Alboem | Home') --}}

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">List Album</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Nama Album</th>
                                    <th>Penyanyi</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th style="text-align:left;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($album as $key => $album)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td> {{ $album -> nama }} </td>
                                    <td> {{ $album -> penyanyi }} </td>
                                    <td> {{ $album -> harga }} </td>
                                    <td> <img class="card-img-top" src="/image/{{ $album -> gambar }}"> </td>
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
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- .animated -->
</div>
@endsection