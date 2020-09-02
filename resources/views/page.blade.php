<html>
    <head>
        <title>{{$page->title}}</title>
        <meta name="description" content="{{$page->descr}}"/>
        <meta name="keywords" content="{{$page->keywords}}"/>
    </head>
    <body>

        <div class="container">
            <h1>{{$page->h1}}</h1>
            {{$page->content}}
        </div>
    </body>
</html>