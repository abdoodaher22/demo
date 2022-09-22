<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    <h2>This is Abdulrahman Blog System</h2>
    <form action="/blogs/{{$blog->id}}">
            
            @csrf
            @method('PUT')
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$blog->title}}">
            <label for="title">Content</label>
            <textarea name="content" cols="30" rows="10">"{{$blog->content}}"</textarea>
            <button >Update</button>

    </form>
    <form action="/blogs/{{$blog->id}}" method="post">
            @csrf
            @method('DELETE')
            <button>DELETE</button>
    </form>
</body>
</html>