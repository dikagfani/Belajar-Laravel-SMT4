<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="csrf_token()">
  <title>@yield($data['title'])</title>
</head>
<body>
  <h2>JUDUL</h2>

  @yield('content')
</body>
</html>