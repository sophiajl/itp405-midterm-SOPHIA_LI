<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>

    @if (session('successStatus'))
      <div class="alert alert-success" role="alert">
        {{ session('successStatus') }} {{ $user->name }}
      </div>
    @endif


    <h1>Admin</h1>
    <p>...</p>
  </body>
</html>
