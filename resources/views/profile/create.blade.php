@extends('layouts.app')
@section('title')
Halama Profile
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Tambahkan Profile
                </div>

                <div class="card-body">
                    <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Foto Profile</label>
                            <input type="file" name="photo" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nomor Induk Keluarga</label>
                            <input type="text" name="nik" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat Profile</label>
                            <textarea name="alamat" required rows="3" class="form-control"></textarea>
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
