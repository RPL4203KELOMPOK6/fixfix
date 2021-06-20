@extends('dashboard')

@section('content')
<div class="card-header">
    <h3 class="card-title">List User</h3>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="width: 35%; text-align: center">Nama</th>
                        <th style="text-align: center">Email</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                        <tr>
                            <td> {{ $u -> id }} </td>
                            <td> {{ $u -> name }} </td>    
                            <td> {{ $u  -> email }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>

@endsection       
