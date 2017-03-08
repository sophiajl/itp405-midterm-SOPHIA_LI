<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

  @if (session('successStatus'))
    <div class="alert alert-success" role="alert">
      {{ session('successStatus') }}
    </div>
  @endif
    <form method="post">
      {{ csrf_field() }}
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <button type="submit">Login</button>
    </form>
  </body>
</html>
