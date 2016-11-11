{!! Form::open(['route' => 'CreateArticle', 'id' => 'articles-form']) !!}
    @include ('articles.form', ['submitButtonText' => 'Add Article'])
{!! Form::close() !!}