<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <h1>creating a new user</h1>
    <div>
        @if(session()->has('success'))
            {{session('success')}}
        @endif
    </div>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('update.user',['user'=> $user])}}">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="name" value="{{$user->name}}">
        <input type="text" name="lastname" placeholder="last name" value="{{$user->lastname}}"/>
        <input type="text" name="pass" placeholder="password" value="{{$user->pass}}"/>
        <button type="submit">edit user</button>
    </form>
</div>
</body>
</html>
