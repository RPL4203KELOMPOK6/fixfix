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
                        <th style="text-align: center">ID</th>
                        <th style="width: 15%; text-align: center">Nama</th>
                        <th style="width: 8%; text-align: center">Penyanyi</th>
                        <th style="width: 10%; text-align: center">Harga</th>
                        <th style="text-align: center">Gambar</th>
                        <th style="text-align: center">Deskripsi</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center"> {{ $album -> id }} </td>
                            <td> {{ $album -> nama }} </td>
                            <td> {{ $album  -> penyanyi }} </td>
                            <td> {{ $album  -> harga }} </td>
                            <td style="text-align: center"> <img class="card-img-top" src="/image/{{ $album -> gambar }}" style="width:200px;height:200px;">  </td>
                            <td> {{ $album  -> deskripsi }} </td>
                        </tr>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>

@endsection       
