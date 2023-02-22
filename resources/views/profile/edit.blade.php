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
                    Edit Profile
                </div>

                <div class="card-body">
                    <form action="{{route('profile.update', $profile->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <img src="{{asset('storage/images/profile/'.$profile->photo)}}" alt="image profile"
                                width="300px" class="img-thubnail mb-3">
                            <input type="file" name="photo" value="{{$profile->photo}}" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="{{$profile->nama}}" onfocus="focused(this)" onfocusout="defocused(this)" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nomor Induk Keluarga</label>
                            <input type="text" name="nik" value="{{$profile->nik}}" 
                            onfocus="focused(this)" onfocusout="defocused(this)" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat Profile</label>
                            <textarea name="alamat" required rows="3" class="form-control">
                            {{$profile->alamat}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">ubah data</button>
                            <a href="/profile" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
