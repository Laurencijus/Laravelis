
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Musu autoriai</div>

                <div class="card-body">
                @foreach ($aut as $val)
    Vardas: {{$val->name}}
    Pavarde:{{$val->surname}}
    <a href="{{route('author.edit',$val)}}">redaguoti</a><br>
<form action="{{route('author.destroy',$val)}}" method="POST">r
   @csrf

    <input type="submit" value="delete"></form><br>

     @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
