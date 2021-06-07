<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      margin: 5px;
    }

    .content {
      margin: 10px;
    }
  </style>
</head>

<body>
  <div class="content">
    @yield('content')
  </div>
</body>

</html>