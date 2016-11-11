<h1>Articles</h1>
{!! link_to_route('create', 'New Article') !!}
<table border="1">
    <tr>
        <th>Edit</th>
        <th>Delete</th>
        <th>Title</th>
    </tr>
    @foreach ($articles as $article)
        <tr>
            <td>{!! link_to_route('update', 'Edit', $article->id) !!}</td>
            <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['destroy', $article->id]]) !!}
                    <button type="submit">Delete</button>
                {!! Form::close() !!}
            </td>
            <td>{!! link_to_route('show', $article->title, $article->id) !!}</td>
        </tr>
    @endforeach
</table>