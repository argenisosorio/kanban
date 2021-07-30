<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create dashboard</title>
  </head>
  <body>
    <h1>Create dashboard</h1>
    @if(count($errors))
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <form action="{{ route('dashboards.store') }}" method="POST">@csrf
      <div>
        <label>Owner</label>
        <input type="text" name="owner">
      </div>
      <div>
        <label>Title</label>
        <input type="text" name="title">
      </div>
      <button type="submit" >SAVE</button>
    </form>
  </body>
</html>