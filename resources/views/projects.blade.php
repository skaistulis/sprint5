@extends('welcome')
@section('content')
<div>
    <div class="projects-custom">
        <div>
            <h2>Projects</h2>
        </div>
        <div>
            <a href="{{route('projects.create')}}" class="btn btn-success">Create New Project</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif  
<div class="table-responsive">
<table class="table">
    <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>Employee</th>
        <th>Action</th>
    </tr>
    @foreach ($projects as $project)
    <tr>
        <td>{{$project->id}}</td>
        <td>{{$project->project_name}}</td>
        <td>{{$project->employees->implode('employee_name', ', ')}}</td>
        <td class="last-td-custom">
            <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                <a class="btn btn-primary" href="{{route('projects.edit', $project->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection