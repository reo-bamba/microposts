
@if(Auth::user()->have_favorite($micropost->id)) 
    {{-- unfavorite ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-light btn-sm "]) !!}
    {!! Form::close() !!}
@else
     {{-- favoriteボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-warning btn-sm "]) !!}
    {!! Form::close() !!}
@endif 