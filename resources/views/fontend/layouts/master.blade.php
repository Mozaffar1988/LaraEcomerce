<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Ecomerce Project</title>
    
    @include('fontend.partial.style')
</head>
<body>

<div class="wrapper">
{{--Navigation--}}
  @include('fontend.partial.nav')
  @yield('content')
  @include('fontend.partial.footer')

  </div>
  @include('fontend.partial.scrips')
</body>
</html>