@extends('template.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">task</div>
                <div class="card-body">
                    <form action="/savetask" method="post">
                        @csrf
                        <div class="input-group input-group-outline mt-2">
                            <label class="form-label">Nama Task</label>
                            <input type="text" name="nama" class="form-control" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </div>
                        <div class="input-group input-group-outline mt-2 mb-4">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" onfocus="focused(this)"
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
