<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Actor</title>
</head>

<body>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div style="margin-top:2%;width:90%; margin-left:auto; margin-right:auto; padding:2%; background:gray;">
            <div>
            <button ><a href="{{route('home')}}">Back</a><br><br>
            </div>
            <table>
                   
            @foreach($actors as $actor)
            <tr>
            <p style="color:white">Actor name:&nbsp;{{$actor->name}}</p>
                @foreach($actor->movies as $movie)
                <p><a href="{{route('movie')}}"><video src="/movies/{{ $movie->file }}" width="200px" height="200px"></video></a></p>
                @endforeach
              
            </tr>
            @endforeach  
            
            </table>
        </div>
    </div>
</body>
</html>