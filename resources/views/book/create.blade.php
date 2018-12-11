

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">musu knygos</div>
                <h1>prideti knyga</h1>

<form action="{{route('book.store')}}"method="POST">
<input type="text" name="name">

<select name='author_id'>
@foreach ($selectas as $val)
 <option value="{{$val->id}}">{{$val->name}} {{$val->surname}}</option>
 @endforeach
</select>
<input type="submit" value="prideti">
@csrf
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
