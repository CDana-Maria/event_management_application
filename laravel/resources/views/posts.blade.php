<x-layout>
    @foreach ($posts as $post)

        <article>
            <h1>
                <a href="/blog/{{$post->id}}">
                   {{$post->title}}
                   </a>

                   </h1>

                   <div>

                   {$post->short_description }}
                   </div>
                   </article>
                   @endforeach
                   </x-layout>