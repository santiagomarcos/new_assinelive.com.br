<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assine Live</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
     <div>
         @include('components._navbar')
     </div>
     <div>
         @yield('content')
     </div>
         @include('components._footer')
</body>
</html>