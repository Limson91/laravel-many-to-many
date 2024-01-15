@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <h3>Load Project</h3>
                
                <form action="{{route('admin.projects.update', $project->id) }}" method="POST">
                    
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}">
                    </div>

                    <div class="form-group">
                        <label for="image_path">Image:</label>
                        <input type="text" name="image_path" id="image_path" class="form-control" value="{{$project->image_path}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea  name="description" id="description" class="form-control">{{$project->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="type_id">Tag:</label>
                        <select name="type_id" id="type_id" class="form-control">
                            <option>Select Tags</option>
                            
                            @foreach($types as $type)
                                <option value="{{$type->id}}" {{old(type_id) == $type->id ? 'selected' : ''}}> {{$type->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Load Project</button>

                </form>

                <a href="{{route('admin.projects.index')}}" class="btn btn.secondary">Back to List!</a>

            </div>
        </div>
    </div>
@endsection
