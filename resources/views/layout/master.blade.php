{{-- 전체 틀이 되는 layout --}}
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
{{-- title 값을 주지않으면 Laravel를 보여준다는 의미 => (변수, 기본값)형태   --}}
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
<div>
    @yield('content')
</div>
</body>
</html>
