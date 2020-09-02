@if('count($users) > 0)
<ul class = "list-unstyled">
    @foreach($users as $user)
    <li class = "media">
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class = "mr-2 rounded"src = "{{ gravater::get($user->email, ['size' => 50]) }}" alt = "">
        <div class = "media-body">
            <div>
                 {{ $user=>name }}
            </div>
            <div>
                {{-- link to detail users page --}}
                <p>{!! link_to_route('users.show', 'View profile', ['users' => $user->id]) !!}</p>
            </div>    
        </div>
    </li>
    @endforeach
</ul>
{{-- link to pagenation --}}
{{ $users->links() }}
@endif