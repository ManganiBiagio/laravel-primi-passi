<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Benvenuto {{$name}} {{$surname}}</h1>
        <ul>
            @foreach ($links as  $link)
            <li><a href="/{{$link}}">{{ $link}}</a></li>
                
            @endforeach
        </ul>
    

    </div>
    
</body>
</html>