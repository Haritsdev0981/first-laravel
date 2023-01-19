@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Input Kelas</div>

                <div class="card-body">
                    <form action="{{route('siswa.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" required name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kelas/Jurusan</label>
                            <select required name="id_kelas" class="form-control">
                                <option value="">--Pilih jurusan--</option>
                                @foreach($kelas as $row)
                                <option value="{{$row->id}}">{{$row->nama}} / {{$row->jurusan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" required name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Tambahkan</button>
                            <button type="reset" class="btn btn-warning">Hapus semua data</button>
                            <a href="/siswa" class="btn btn-danger">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
