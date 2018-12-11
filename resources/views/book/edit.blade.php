

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="{{route('book.update', $book)}}" method="POST">
    <input type="text" name="name" value="{{$book->name}}">
    <select name="author_id">
        @foreach ($select as $val)
        <option value="{{$val->id}}" @if($val->id == $book->author_id) selected @endif>{{$val->name}} {{$val->surname}}</option>
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
