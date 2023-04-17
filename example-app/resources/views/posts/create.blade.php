<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post page</title>
</head>
<body>
<h1>Create new post</h1>
<form action="/post" method="post">
    @csrf
    <p>Post title</p>
    <input type="text" name="title">
    <br>
    <p>Post content</p>
    <textarea name="content"></textarea>
    <br>
    @foreach($tags as $tag)
        <input type="checkbox" name="tags[]" value="{{$tag->id}}" > {{$tag->name}} <br>
    @endforeach
    <br>
    <button type="submit">Create</button>
</form>

</body>
</html>
