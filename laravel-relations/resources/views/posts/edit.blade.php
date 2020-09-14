<h1>modifica il tuo post</h1>

<form action="{{route('posts.update', $post)}}" method="post">
  @csrf
  @method('PUT')

  <label>Title</label>
  <input type="text" name="title" value="{{$post->title}}">
  <br>
  <br>

  <label>Content</label>
  <textarea name="title" rows="5" cols="50">{{$post->content}}</textarea>
  <br>
  <br>

  <label>User</label>
  <select name="user_id">
    @foreach ($users as $user)
      <option value="{{$user->id}}" {{($user->id == $post->user->id) ? 'selected' : ''}}>{{$user->name}}</option>
    @endforeach
  </select>

  <div>
    @foreach ($categories as $category)
      <input type="checkbox" name="categories[]" {{($post->categories->contains($category)) ? 'checked' : ''}} value="{{$category->id}}">
      <span>{{$category->name}}</span>
    @endforeach
  </div>

  <br>
  <br>
  <input type="submit" value="Save">
</form>
