@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif

                <h3>Projects List</h3>

                <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Create new Project!</a>

                @if (count($projects) > 0)
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Controls</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{$project->id}}</td>
                                    <td>{{$project->title}}</td>
                                    <td>
                                        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-sm btn-warning">Edit</a>

                                        <form action="{{route('admin.projects.destroy', $project->)}}" method="POST" class="d-inline">
                                        
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete!</button>

                                        </form>
                                    </td>
                                </tr>                                
                            @endforeach
        
                        </tbody>
                    </table>

                   @else
                   <p>There are no projects!</p>
                    
                @endif
            </div>
        </div>
    </div>
@endsection