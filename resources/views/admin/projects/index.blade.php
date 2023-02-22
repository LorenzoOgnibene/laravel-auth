@extends('layouts.admin')

@section('content')
<div class="container p-5">
  <div class="button-wrapper mb-2 text-center">
    <a href="{{route('admin.projects.create')}}" class="btn btn-info">Create a new Project post</a>
  </div>
   
  <table class="table table-dark table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Titolo</th>
            <th scope="col">data di creazione</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
              <td scope="row">{{$project->id}}</td>
              <td scope="row">{{$project->title}}</td>
              <td scope="row">{{$project->creation_date}}</td>
              <td scope="row">
                <a href="{{route('admin.projects.show', $project)}}" class="btn btn-info">Show</a>
                <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-info">Edit</a>
                <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection