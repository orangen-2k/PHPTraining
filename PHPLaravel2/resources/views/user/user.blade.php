@if(Auth::check())
@csrf
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
@if(isset($user))
    {{"Tên: ".$user->name}}
    <br>
    {{"Email: ".$user->email}}
@endif
<a href="{{url('dangxuat')}}">Đăng xuất</a>
</body>
</html>
@else
    <h1>Fail</h1>
@endif
