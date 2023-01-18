@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Edit Kelas</div>

                <div class="card-body">
                    <form action="{{route('kelas.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" required name="nama" value="{{$kelas->nama}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" required name="jurusan" value="{{$kelas->jurusan}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
