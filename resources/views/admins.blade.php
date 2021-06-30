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
                                    <th class="serial">No.</th>
                                    <th class="avatar">Nama Album</th>
                                    <th>Penyanyi</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th style="text-align:left;">Deskripsi</th>
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
                                    <td style="text-align:left;"> {{ $album -> deskripsi }} </td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">List User</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">No.</th>
                                    <th class="avatar">Username</th>
                                    <th style="text-align: left">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                @if ($user->id != 1)
                                    <tr>
                                        <td> {{ $user -> id}} </td>
                                        <td> {{ $user -> name }} </td>
                                        <td style="text-align: left"> {{ $user -> email }} </td>
                                    </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- .animated -->
</div>
@endsection