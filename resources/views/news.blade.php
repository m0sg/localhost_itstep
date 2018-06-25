
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News</title>


</head>
<body>


    @foreach($all_news as $news)
        <article>
            {{--<img src="cache/{!! $news->images !!}" alt="">--}}
            <h2>{!! $news->name !!}</h2>
            <h3>{!! $news->post !!}</h3>
            <p>{!! $news->all_post !!}</p>
            <p>Опубликовано: {!! $news->created_at !!} </p>
            <p>Теги: </p>
        </article>
    @endforeach


</body>
</html>
