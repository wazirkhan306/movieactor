<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Movie</title>
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
            <button style="float:right"><a href="{{route('home')}}">Back</a><br><br>
            </div>
        
            <table>
            <tr>

            @foreach($movies as $movie)
            <td>
            <p style="color:white">movie name:&nbsp;{{$movie->movie_name}}</p>
            <p><a href="{{route('movie')}}"><video src="/movies/{{ $movie->file }}" width="200px" height="200px"></video></a></p>
                @foreach($movie->actors as $actor)
                <p > <a href="{{route('movie')}}" style="color:white">{{ $actor->name }}</a></p>
                @endforeach
                </td>
            @endforeach     
            </tr>
            </table>
        </div>
    </div>
</body>
</html>