<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/styles.css')}}">
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
        <title>{{config('app.name','Assignment')}}</title>
    </head>
    <body>
      @yield('content') 
    </body>
</html>
