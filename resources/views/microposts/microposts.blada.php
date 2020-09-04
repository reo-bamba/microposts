@if(count($microposts) > 0)
<ul class = "list-unstyled">
    @foreach($microposts as $micropost)
    <li class = "md-3">
         {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
         <img class="mr-2 rounded" src="{{ Gravatar::get($micropost->user->email, ['size' => 50]) }}" alt="">
         <div class = "mrdia-body">
             <div>
                 {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                 {!! link_to_route('users.show', $micropost->user->name, ['user' => $micropost->user->id]) !!}
                 <span class = "text-muted">posted at {{ $micropost->created_at }}</span>
             </div>
             <div>
                 {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>    {{-- l12brは改行するやつ --}}
             </div>
            @ifT(Auth::open() == $micropost->user_id)
            {{-- 投稿削除ボタンのフォーム --}}
            {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
            @endif
         </div>
    </li>
    @endforeach
</ul>
 {{-- ページネーションのリンク --}}
    {{ $microposts->links() }}
@endif