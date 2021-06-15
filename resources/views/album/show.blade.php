@extends('dashboard')

@section('content')
<div class="card-header">
    <h3 class="card-title">List Album</h3>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="width: 35%; text-align: center">Nama</th>
                        <th style="text-align: center">Penyanyi</th>
                        <th style="text-align: center">Harga</th>
                        <th style="text-align: center">Gambar</th>
                        <th style="text-align: center">Deskripsi</th>
                        <th style="text-align: center">Pemasok ID</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $album -> id }} </td>
                            <td> {{ $album -> nama }} </td>
                            <td> {{ $album  -> penyanyi }} </td>
                            <td> {{ $album  -> harga }} </td>
                            <td> {{ $album  -> Gambar }} </td>
                            <td> {{ $album  -> deskripsi }} </td>
                        </tr>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>

@endsection       
