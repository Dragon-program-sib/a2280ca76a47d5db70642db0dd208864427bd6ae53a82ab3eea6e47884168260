<h2>Панель администратора</h2>

@if(empty($newsList))
    <h3>Новости отсутствуют.</h3>
@else
    @foreach($newsList as $news)
        <div>
            <h2><a href="{{ route('news.show', ['id' => $news['id']]) }}">{{ $news['title'] }}</a></h2>
            <p>{!! $news['description'] !!}</p>
        </div>
    @endforeach
@endif

{{-- Комментарий. --}}
