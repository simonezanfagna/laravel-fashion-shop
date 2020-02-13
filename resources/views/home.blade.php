<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="d-flex justify-content-around flex-wrap">
      @foreach ($cloth as $value)
        <div class="">
          <ul class="list-group mt-5 mb-5">
            <li class="list-group-item">Nome: {{ $value->name }}</li>
            <li class="list-group-item">Taglia: {{ $value->taglia }}</li>
            <li class="list-group-item">Prezzo: € {{ $value->prezzo }}</li>
          </ul>
        </div>
      @endforeach
    </div>
  </body>
</html>
