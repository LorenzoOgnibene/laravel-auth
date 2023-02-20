@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <div class="card m-auto text-center" style="width: 45rem;">
        <img src="{{$project->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{$project->title}}</h2>
            <p class="card-text">{{$project->description}}</p>
            <h6 class="card-subtitle mb-2 text-muted">{{$project->creation_date}}</h6>

        </div>
      </div>
</div>
@endsection