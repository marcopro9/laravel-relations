<h1>{{$post->title}}</h1>

@if (!empty($post->user))
  <h3>
    Author: {{$post->user->name}}
  </h3>
@endif

<div>
  <img src="{{$post->image->url}}" alt="{{$post->title}}">
</div>

<div>
  {{$post->content}}
</div>
