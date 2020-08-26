<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <h1>Blog</h1>
        <div class = "posts">
            @foreach ($posts as $post)
                <div class = "post">
                <a href="{{ action('PostController@show', $post->id) }}">
                    <h2 class = "title">{{ $post->title }}</h2>
                </a>
                    <p class = "body">{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
             {{ $posts->links() }}
        </div>
    </body>
</html>
