
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <h1>Redaguoti autoriu</h1>

<form action="{{route('author.update', $author)}}"method="POST">
<input type="text" name="name" value="{{$author->name}}">
<input type="text" name="surname" value="{{$author->surname}}">
<input type="submit" value="prideti">
@csrf



</form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
