@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Data Siswa</div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $row)
                            <tr>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->jurusan}}</td>
                                <td>
                                    <form action="#" method="post" onsubmit="return confirm('Apakah Anda akan menghapus data ini?')">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="#" class="btn btn-warning">Edit</a>
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
@endsection
