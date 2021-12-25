@extends('templates.default')

@section('content')
    <h3>Edit task</h3>
    <p>Update existing task</p>
    <form class="form-inline" method="POST" action="{{ route('edit', $task->id) }}">
        <div class="row mb-3">
            <label for="name" class="col-sm-1 col-form-label">Task:</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="due_date" class="col-sm-1 col-form-label">Due:</label>
            <div class="col-sm-11">
                <input type="date" class="form-control" id="due_date" name="due_date" value="{{ date('Y-m-d', strtotime($task->due_date)) }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-1 form-check-label">Status:</label>
            <div class="col-sm-11">
                <input type="checkbox" class="form-check-input" id="status" name="status" {{ ($task->status == 1 ? ' checked' : '') }}>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
    </form>

@endsection
