<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    @session('message')
     <div class="w-full p-2 m-1 ring-1 ring-green-300  bg-green-400 rounded-sm"> {{session('message')}}</div>   
    @endsession
 <div class="p-3">
    {{ $slot }}
 </div>
  </body>
</html>