@extends('welcome')
@section('content')
<div>
    <div class="project-create-custom">
        <div>
            <h2>Edit Project</h2>
        </div>
        <div>
            <a href="{{route('employees.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <h2>There are some problems with your input</h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="project-create-form" action="{{route('employees.update', $employee->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="employee_name">Project Name</label>
      <input type="text" class="form-control" id="employee_name" name="employee_name" value="{{$employee->employee_name}}">
    </div>
    <label for="project_id">Choose the project:</label>
    <select id="project_id" name="project_id">
        <option value='' disabled selected style='display:none;'>Projects:</option>
        @foreach ($project->all() as $project)
        <option value={{$project->id}}>{{$project->project_name}}</option>
        @endforeach
    </select>
    <div>
        <button class="btn btn-primary" type="submit">Edit</button>
    </div>
</form>
@endsection