<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of dashboards</title>
  </head>
  <body>
    @if(Session::has('success'))
      Message: {{ Session::get('success') }}
    @endif
    <h1>List of dashboards</h1>
    <a href="{{ route('dashboards.create') }}">
      <button>NEW</button>
    </a>
    <br />
    <br />
    <table border="1px" cellspacing="0px" style="width:100%;">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Owner</th>
          <th class="text-center">Title</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($dashboards as $dashboard)
      <tr>
        <td class="text-center">{{ $dashboard->id }}</td>
        <td class="text-center">{{ $dashboard->owner }}</td>
        <td class="text-center">{{ $dashboard->title }}</td>
        <td>
          UPDATE, SHOW, DELETE
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </body>
</html>
