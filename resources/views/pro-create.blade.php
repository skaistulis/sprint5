@extends('welcome')

@section('content')

<div>
    <div class="project-create-custom">
        <div>
            <h2>Add New Project</h2>
        </div>
        <div>
            <a href="{{route('projects.index')}}" class="btn btn-primary">Back</a>
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

<form class="project-create-form" action="{{route('projects.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="project_name">Project Name</label>
      <input type="text" class="form-control" id="project_name" name="project_name">
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Create</button>
    </div>
</form>


@endsection