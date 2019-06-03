@extends('layout')

@section('content')

<div class="container">
    <h3>Edit task # - {{$hero->id}}</h3>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => ['heroes.update', $hero->id], 'method'=>'PUT']) !!}
                <div class="form-group">    
                    <label for="nickname">Nickname</label>
                    <input type="text" class="form-control" name="nickname" id="nickname" value="{{$hero->nickname}}">
                </div>
                <div class="form-group">    
                    <label for="real_name">real_name</label>
                    <input type="text" class="form-control" name="real_name" id="real_name" value="{{$hero->real_name}}">
                </div>
                <div class="form-group">    
                    <label for="origin_description">origin_description</label>
                    <input type="text" class="form-control" name="origin_description" id="origin_description" value="{{$hero->origin_description}}">
                </div>
                <div class="form-group">    
                    <label for="superpowers">superpowers</label>
                    <input type="text" class="form-control" name="superpowers" id="superpowers" value="{{$hero->superpowers}}">
                </div>
                <div class="form-group">    
                    <label for="catch_phrase">catch_phrase</label>
                    <input type="text" class="form-control" name="catch_phrase" id="catch_phrase" value="{{$hero->catch_phrase}}">
                </div>
                <button class="btn btn-success">Submit</button>
                <button class="btn btn-danger">
                    <a href="{{ route('heroes.index') }}">Back</a> 
                </button>

            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection