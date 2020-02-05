@extends('layouts.app')

@section('content')
<div class="container" style="text-align:center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="margin-top:2%;width:90%; margin-left:auto; margin-right:auto; padding:2%; background:gray;">
                     <div>
                       <button ><a href="{{route('movie')}}">Add Movie</a></button>  <button><a href="{{route('actor')}}">Add Actor <a></button><br><br>
                       <button ><a href="{{route('single.movie')}}">Single Movie</a></button>  <button><a href="{{route('single.actor')}}">Single Actor <a></button><br>
                     </div>
                     
                     <table>
                     <tr> 
                     @foreach($movies as $movie)
                      
                      <td>
                      <video src="/movies/{{ $movie->file }}" width="200px" height="200px"></video>
                      </td>
                    
                      @endforeach
                      </tr>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
