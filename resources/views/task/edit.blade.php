@extends('template.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">task</div>
                <div class="card-body">
                    <form action="{{url('taskupdate', $task->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group mt-2">
                            <label class="form-label">Nama Task</label>
                            <input type="text" name="nama" value="{{$task->nama}}" class="form-control input-outline" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </div>
                        <div class="form-group mt-2 mb-4">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" value="{{$task->description}}" class="form-control input-outline" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="/task" class="btn btn-danger">Back</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
