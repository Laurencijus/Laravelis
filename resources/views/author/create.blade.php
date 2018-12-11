
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Pairinkite Jūsų pageidaujamą autorių</div>




<form action="{{route('author.store')}}"method="POST"><br>

  Autoriaus vardas:<input type="text" name="name"><br><br>
  Autoriaus pavarde:<input type="text" name="surname"><br>
<!-- <input type="submit" value="prideti">  -->
<button type="submit" class="btn btn-primary">Submit</button>



<!-- <select name='book_id'>
@foreach ($selectas as $val)
 <option value="{{$val->id}}">{{$val->name}} {{$val->surname}}</option>
 @endforeach
</select> -->
@csrf


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
