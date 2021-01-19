<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Ecomerce Project</title>
    
    @include('partial.style')
</head>
<body>

<div class="wrapper">
{{--Navigation--}}
  @include('partial.nav')
  @yield('content')
  @include('partial.footer')

  </div>
  @include('partial.scrips')
</body>
</html>