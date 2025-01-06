@extends('layouts.main')

@section('container')
`
@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>

    <p>By. Yogi Suryatmika in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <h5>{{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p>

    <p><a href="/posts/{{ $post->slug }}">Read more...</a></p>
</article>
@endforeach


@endsection

