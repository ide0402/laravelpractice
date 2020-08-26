<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $post->title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <h1>BlogName</h1>
        <a href="{{ action('PostController@index') }}">
            <h2 class = "list">List</h2>
        </a>
        <div class = "post">
            <h3 class = "title">{{ $post->title }}</h3>
            <p class = "createdate">{{ $post->created_at }}</P>
            <p class = "body">{{ $post->body }}</p>
        </div>
        <div class='otherlink'>
             <p>前へ</p>
             <p>次へ</p>
        </div>
    </body>
</html>
