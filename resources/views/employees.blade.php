@extends('welcome')
@section('content')
<div>
    <div class="projects-custom">
        <div>
            <h2>Employees</h2>
        </div>
        <div>
            <a href="{{route('employees.create')}}" class="btn btn-success">Add New Employee</a>
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
        <th>Employee Name</th>
        <th>Project</th>
        <th>Action</th>
    </tr>
    @foreach ($employees as $employee)
    <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->employee_name}}</td>
        @if (($employee->project_id) ==null ) 
            <td></td>
        @else
        <td>{{$employee->project->project_name}}</td> 
        @endif
        <td class="last-td-custom">
            <form action="{{route('employees.destroy', $employee->id)}}" method="POST">
                <a class="btn btn-primary" href="{{route('employees.edit', $employee->id)}}">Edit</a>
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