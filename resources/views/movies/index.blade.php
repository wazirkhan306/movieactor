<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body style="color:white;">
  <div style="margin-top:10%;width:50%; margin-left:auto; margin-right:auto; padding:10%; background:green;">
    <div>
        <button style="float:right"><a href="{{route('home')}}">Back</a><br><br>
    </div>
        @if(session()->get('success'))
            <div style="background-color:black; color:white:padding:10px;text-align:center">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (count($errors) > 0)
            <div style="background-color:black; color:red;pading:10px;taxt-algin:center;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
      <h2>Upload you movie</h2>

      <form method="post" action="{{route('movie.create')}}" enctype="multipart/form-data">
       @csrf
         <lable for="movie_name">Movie Name</lable> <br>
         <input type="text" name="movie_name" placeholder="Movie Name"><br><br>

         <lable for="file">Upload movie</lable> <br>
         <input type="file" name="file"><br><br>
         <input type="submit" value="Movie Upload" >
      </form>
  </div>
</body>
</html>