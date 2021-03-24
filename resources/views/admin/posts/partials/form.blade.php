<div class="form-group">
    {!! Form::label('name', 'Nombre : ') !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre del Post']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug : ') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Ingrese el slug del Post','readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categorias') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach

    

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
  
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
   
    @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
@enderror
</div>
<div class="row mb-3">
    <div class="col">
       <div class="image-wrapper">
        @isset ($post->image)
        <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
        @else
        <img id="picture" src="https://cdn.pixabay.com/photo/2021/02/08/20/24/lake-5996427_960_720.jpg" alt="">
        @endif
       </div>

    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file','accept' => 'image/*']) !!}
        
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
        
        </div>
       
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate fugit, aliquid ex, maxime quod pariatur enim maiores deleniti repudiandae odio ea modi? Adipisci maxime impedit provident cumque dicta quaerat iusto?
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
    <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post : ') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>