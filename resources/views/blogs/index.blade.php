<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focal x Blog</title>
</head>
<body>
    <h2>This is Abdulrahman Blog System</h2>
    @foreach($blogs as $blog)
        <h3>{{$blog->title}}</h3>
        <p>{{$blog->content}}</p>
    @endforeach
</body>
</html>