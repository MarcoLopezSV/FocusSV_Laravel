<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel Focus SV</title>
  </head>
  <body>
    <h1>People List</h1>
    <table class='table table-bordered' style="margin:50px">
    <thead class="thead-dark">
    <tr>
        <th>id</th>
        <td>id_nation</td>
        <th>nation</th>
        <td>id_year</td>
        <th>year</th>
        <th>population</th>
        <td>slug_nation</td>
    </tr>
    </thead>
    @foreach($data as $dat)
    <tbody>
    <tr>
        <td>{{$dat ['id']}}</td>
        <td>{{$dat ['id_nation']}}</td>
        <td>{{$dat ['nation']}}</td>
        <td>{{$dat ['id_year']}}</td>
        <td>{{$dat ['year']}}</td>
        <td>{{$dat ['population']}}</td>
        <td>{{$dat ['slug_nation']}}</td>
    </tr>
    </tbody>
    @endforeach
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>