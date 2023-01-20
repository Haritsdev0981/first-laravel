@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Data Siswa</div>
                <div class="card-body">
                <div class="table-responsive">
                    <a href="/home" class="btn btn-info mb-2">Home</a>
                    <a href="siswa/create" class="btn btn-success mb-2">Tambahkan Siswa</a>
                    <!-- <form action="#" method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('bener mau diapus?')">
                                    Hapus Semua
                                </button>
                            </form> -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $row)
                            <tr>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->kelas->jurusan}}</td>
                                <td>{{$row->alamat}}</td>
                                <td>
                                    <form action="{{route('siswa.destroy', [$row->id])}}" method="post" onsubmit="return confirm('Apakah Anda akan menghapus data ini?')">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="{{route('siswa.edit', [$row->id])}}" class="btn btn-warning">Edit</a>
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

        </div>
    </div>
</div>
@endsection
