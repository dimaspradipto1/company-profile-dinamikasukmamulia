<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('layouts.dashboard.styles')


</head>

<body>
  @include('sweetalert::alert')
  
  @yield('content')

  @include('layouts.dashboard.scripts')
  @stack('scripts')
</body>

</html>