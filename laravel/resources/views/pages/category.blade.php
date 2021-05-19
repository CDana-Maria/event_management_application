@extends('layout1')

@section('seoTitle')
{{ $category->name }}   Category Page
@endsection

@section('content')
<style>
  section {
    padding: 200px 200px;
    display: block;
  }</style>
<section>
  <h2 class="about-title featured-text text-center">{{ $category->name }}Category</h2>
  <div class="col-12">
    <div class="row">
      @foreach ($articles as $article )
      <div class="post1 col-4">
        <img class="img-fluid pb-3" src="../images/prod_9.webp" alt="article1">
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->short_description }}</p>
        <a href="/article/{{ $article->id }}">Read more</a>
        <small class="text-muted float-right">3 mins</small>
        <div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>
</section>
@endsection
