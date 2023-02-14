@extends('layouts.app')

@section('title')
halaman Home
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Edit Kelas</div>

                <div class="card-body">
                    <form action="{{route('siswa.update',[$siswa->id])}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" required name="nama" class="form-control" value="{{$siswa->nama}}">
                        </div>
                        <div class="form-group">
                            <label>Kelas/Jurusan</label>
                            <select required name="id_kelas" class="form-control" value="{{$siswa->id_class}}">
                                <option value="{{$siswa->kelas->id}}"><b>{{$siswa->kelas->nama}} / {{$siswa->kelas->jurusan}}</b></option>
                                @foreach($kelas as $row)
                                <option value="{{$row->id}}">{{$row->nama}} / {{$row->jurusan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" required name="alamat" class="form-control" value="{{$siswa->alamat}}">
                        </div>
                        <div class="form-group">
                        <button class="btn btn-success">Tambahkan</button>
                            <a href="/siswa" class="btn btn-danger">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
