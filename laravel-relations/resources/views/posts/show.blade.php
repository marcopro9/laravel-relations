<h1>{{$post->title}}</h1>

@if (!empty($post->user))
  <h3>
    Author: {{$post->user->name}}
  </h3>
@endif

@if (!$post->categories->isEmpty())
  <div>
    <h3>Categories</h3>
    <ul>
      @foreach ($post->categories as $category)
        <li>{{$category->name}}</li>
      @endforeach
    </ul>
  </div>
@endif


<div>
  <img src="{{$post->image->url}}" alt="{{$post->title}}">
</div>

<div>
  {{$post->content}}
</div>
