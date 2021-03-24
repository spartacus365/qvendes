<div class="card">
    <div class="card-header">
        <input wire:model="search"  class="form-control" placeholder="Ingrese el nombre de un post">
    </div>

    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div> 
    @else
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                <strong>No hay ningún registro</strong>
              </div>
        </div>
    @endif
    
</div>
