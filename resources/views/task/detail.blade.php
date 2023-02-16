@extends('template.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">task</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                           <tr>
                                <td>Nama</td>
                                <td>Deskripsi</td>
                           </tr>
                           <tr>
                                <td>{{$task->nama}}</td>
                                <td>{{$task->description}}</td>
                           </tr>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection