@section('content')
<div class="container">
  @foreach($category as $article)
              <h1>{{ $article->title }}</h1>
              <h3>{{ $article->short_description }}</h3>
              <a href="/article/{{ $article->id }}">Continue reading</a>
  @endforeach
</div>
@endsection
