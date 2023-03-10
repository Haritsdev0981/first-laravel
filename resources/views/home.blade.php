@extends('template.dashboard')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Data Kelas</div>
                <div class="card-body">
                <div class="table-responsive">
                <a href="/siswa" class="btn btn-info mb-2">Data Siswa</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kelas as $row)
                            <tr>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->jurusan}}</td>
                                <td>
                                    <form action="{{route('kelas.destroy', [$row->id])}}" method="post" onsubmit="return confirm('Apakah Anda akan menghapus data ini?')">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="{{route('kelas.edit', [$row->id])}}" class="btn btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Input Kelas</div>

                <div class="card-body">
                    <form action="{{route('kelas.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" required name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" required name="jurusan" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
