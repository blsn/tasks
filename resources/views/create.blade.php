@extends('templates.default')

@section('content')
    <h3>Add task</h3>
    <p>Creating a new task</p>
    <form class="form-inline" method="POST" action="{{ route('create') }}">
        <div class="row mb-3">
            <label for="name" class="col-sm-1 col-form-label">Task:</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="name" name="name" placeholder="Descriptions ..." value="{{ old('name') ? : '' }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="due_date" class="col-sm-1 col-form-label">Due:</label>
            <div class="col-sm-11">
                <input type="date" class="form-control" id="due_date" name="due_date" placeholder="Add date..." value="{{ old('due_date') ? : '' }}">
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
    </form>
@endsection
