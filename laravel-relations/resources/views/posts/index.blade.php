<h1>Lista dei Posts</h1>

<ul>
  @foreach ($posts as $post)
    <li>
      <h2>{{$post->title}}</h2>
      <div>
        <a href="{{route('posts.show', $post)}}">Leggi</a>
      </div>
    </li>
  @endforeach
</ul>
