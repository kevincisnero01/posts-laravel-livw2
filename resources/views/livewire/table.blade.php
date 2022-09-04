<h1>Listado de Post</h1>
<table class="table border">
<thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Contenido</th>
        <th colspan="2">Opciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
                <button class="btn btn-primary">Editar</button>
            </td>
            <td>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $posts->links() !!}
</div>