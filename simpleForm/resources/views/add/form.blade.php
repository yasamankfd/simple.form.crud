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

        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('add.user')}}">
            @csrf
            @method('post')
            <input type="text" name="name" placeholder="name">
            <input type="text" name="lastname" placeholder="last name"/>
            <input type="text" name="pass" placeholder="password"/>
            <button type="submit">add user</button>
        </form>
    <h1>users</h1>
    <div>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>last name</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach($myusers as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>
                        <a href="{{route('user.edit',['user'=> $user] )}}">edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('del.user',['user'=>$user])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</div>
</body>
</html>
