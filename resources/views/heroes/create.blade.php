@extends('layout')

@section('content')

<div class="container">
    <h3>Create hero</h3>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => ['heroes.store']]) !!}
            
                <div class="form-group">    
                    <label for="nickname">Nickname</label>
                    <input type="text" class="form-control" name="nickname" id="nickname">
                </div>
                <div class="form-group">    
                    <label for="real_name">real_name</label>
                    <input type="text" class="form-control" name="real_name" id="real_name">
                </div>
                <div class="form-group">    
                    <label for="origin_description">origin_description</label>
                    <input type="text" class="form-control" name="origin_description" id="origin_description">
                </div>
                <div class="form-group">    
                    <label for="superpowers">superpowers</label>
                    <input type="text" class="form-control" name="superpowers" id="superpowers">
                </div>
                <div class="form-group">    
                    <label for="catch_phrase">catch_phrase</label>
                    <input type="text" class="form-control" name="catch_phrase" id="catch_phrase">
                </div>
                <button class="btn btn-success">Submit</button>

            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection