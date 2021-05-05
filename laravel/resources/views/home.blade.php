@section('content')
<div class="row">
    <div class="col-12">
        @foreach ($articles as $articles)
        <div class="container">
            <h1> {{ $articles->title }}</h1>
            <h3> {{ $articles->short_description }}</h3>
        </div>
        @endforeach
    </div>
</div>
@endsection

