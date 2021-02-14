<!DOCTYPE html>
<html lang="en">
<head>

    @include('inc.head')

</head>
<body>

  @include('inc.nav')

  @include('inc.messages')

  @yield('content')
 

  
  @include('inc.footer')
 
 
</body>
</html>