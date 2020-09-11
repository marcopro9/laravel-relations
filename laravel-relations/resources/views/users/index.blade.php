<h1>Lista Utenti</h1>

@foreach ($users as $user)
  <div>
    <h3>{{$user->name}}</h3>

    @if (!empty($user->posts))
      <ul>
        @foreach ($user->posts as $post)
          <li>
            <a href="{{route('posts.show', $post)}}">{{$post->title}}</a>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
  <hr>
@endforeach
