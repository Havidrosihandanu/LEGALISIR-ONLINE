<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{ $upload->name }}</p>
    <p>{{ $upload->path }}</p>
    @if (substr($upload->path, -3) == 'pdf')
        
    <embed type="application/pdf" src="{{ asset($url) }}" width="300" height="400">{{ $upload->path }}</embed>
    @else
        
    <img src="{{ asset($url) }}" alt="" height="200px" width="200px">
    @endif
</body>
</html>