

<form action="{{route($route, $project)}}" method="POST"> 
    @csrf
    @method($method)


    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" name="title" value="{{old('title', $project->title)}}">
                
    <label for="description" class="form-label">Descrizione</label>
    <textarea name="description" class="form-control">{{old('description', $project->description)}}</textarea>
                
    <label for="image" class="form-label">Immagine</label>
    <input type="text" class="form-control" name="image" value="{{old('image', $project->image )}}">
            
    <label for="sale_date" class="form-label">data di uscita</label>
    <input type="text" class="form-control" name="creation_date" value="{{old('creation_date', $project->creation_date)}}">
        
    <label for="slug" class="form-label">slug</label>
    <input type="text" class="form-control mb-5" name="slug" value="{{old('slug', $project->slug)}}">
            
    <button type="submit" class="btn btn-danger">Aggiungi</button>
</form>