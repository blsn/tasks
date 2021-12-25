@extends('templates.default')

@section('content')
    <h3>Task tracker</h3>
    <p>Tracking information list</p>
    <div class="card border-primary mt-4 mb-5 list-summary">
        <div class="card-header">Dashboard</div>
        <div class="card-body text-primary">
            <h5>List summary</h5>
            <div class="card-text">
                <span>Total: {{ $total }},</span>
                <span>Completed: {{ $completed }},</span>
                <span>Remaining: {{ $remaining }}</span>
            </div>
        </div>
    </div>
    <form action="/" method="GET">
        <div class="row col-md-9 gx-2 mb-3">
            <div class="col">
                <label for="start_date" class="sr-only">Start date:</label>
                <input type="date" class="form-control" name="start_date" value="{{ request()->start_date }}">
            </div>
            <div class="col">
                <label for="end_date" class="sr-only">End date:</label>
                <input type="date" class="form-control" name="end_date" value="{{ request()->end_date }}">
            </div>
            <div class="col position-relative">
                <button class="btn btn-primary position-absolute bottom-0" type="submit">GET</button>
            </div>
        </div>
    </form>
    <table class="table tasks">
        <thead>
            <tr>
                <th scope="col">@sortablelink('id', '#')</th>
                <th scope="col">@sortablelink('name', 'Task')</th>
                <th scope="col">@sortablelink('due_date', 'Due')</th>
                <th scope="col">@sortablelink('status', 'Completed')</th>
                <th scope="col">Action</th>
                <th scope="col">@sortablelink('updated_at', 'Created')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ date('Y-m-d', strtotime($task->due_date)) }}</td>
                    <td><input class="status" type="checkbox" {{ ($task->status == 1 ? ' checked' : '') }}></td>
                    <td><a href="edit/{{ $task->id }}">Edit</a> | <a href="delete/{{ $task->id }}">Delete</a></td>
                    <td>{{ $task->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tasks->appends(request()->input())->links() }}
@endsection
