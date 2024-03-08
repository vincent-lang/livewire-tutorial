<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('user.update', [$user->id])}}" method="post">
        @csrf
        @method('put')
        <h1>edit current user: {{$user->name}}</h1>
        <input type="text" name="name" value="{{$user->name}}">
        <input type="submit" value="submit">
    </form>
</body>

</html>