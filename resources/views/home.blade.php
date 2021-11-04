<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h1 class="titolo">TITOLO</h1>

@foreach ($movies as $movie)

<div class="card">
<h2> {{$movie -> title}}</h2>
<h4>{{$movie -> original_title}}</h4>

</div>


@endforeach


    
</body>
</html>