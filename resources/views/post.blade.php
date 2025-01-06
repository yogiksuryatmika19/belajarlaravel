
@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, autem a. In mollitia, eum id ratione voluptate vel rem temporibus deserunt pariatur adipisci voluptas quaerat impedit, tenetur autem dolor. Ducimus!Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem rem, tempore quas doloribus voluptas eius perferendis voluptatum explicabo quibusdam quis voluptatem officiis, aperiam alias assumenda in recusandae minima, saepe architecto. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut quisquam sapiente perspiciatis, blanditiis vel alias necessitatibus, veniam vitae libero suscipit quam repellat. Temporibus, quisquam laborum. Rem eum at dicta autem.</p>
</article>

<a href="/posts">Back to Posts</a>


@endsection
