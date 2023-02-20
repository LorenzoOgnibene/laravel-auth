@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{route('admin.projects.store')}}" method="POST"> @csrf
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" value="{{old('title')}}">
        
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" class="form-control">{{old('description')}}</textarea>
        
        <label for="image" class="form-label">Immagine</label>
        <input type="text" class="form-control" name="image" value="{{old('image')}}">
    
        <label for="sale_date" class="form-label">data di uscita</label>
        <input type="text" class="form-control" name="creation_date" value="{{old('creation_date')}}">

        <label for="slug" class="form-label">slug</label>
        <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
    
        <button type="submit" class="btn btn-danger">Aggiungi</button>
    </form>
</div>

@endsection
