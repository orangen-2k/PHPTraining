<!DOCTYPE html>

<html>
    <header>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="IE=edge"/>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
    </header>
    <body>
        @csrf
        <h1>Hello User</h1>
            {{ Auth::user()->name }}<br/>
            {{ Auth::user()->email }}<br/>
        <a href="{{url('logout')}}">Đăng xuất</a>
    </body>
</html>
