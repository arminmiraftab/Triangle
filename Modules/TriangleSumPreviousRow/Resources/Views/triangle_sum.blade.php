<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($array as $key=>$value)
    @foreach($value as $keyRows=>$valueRows)
        @if($previousKey !=$keyRows)
        <br>
            @endif
           {{$valueRows}}
<?php $previousKey=$keyRows?>

    @endforeach

    @endforeach
</body>
</html>

