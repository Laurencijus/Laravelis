
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @foreach ($visibuk as $val)
Pavadinimas: {{$val->name}}
Autorius: {{$val->KnygosAutorius->name}} {{$val->KnygosAutorius->surname}}
<a href="{{route('book.edit',$val)}}">redaguoti</a>
<form action="{{route('book.destroy',$val)}}" method="POST">
    @csrf
    <input type="submit" value="delete">
</form><br>
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
