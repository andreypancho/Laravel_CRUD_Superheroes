@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <h3>Show task # - {{$hero->id}}</h3>
        <button class="btn btn-success">
            <a href="{{ route('heroes.index') }}" style="color: white;">Back</a> 
        </button>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <h3>Nickname</h3>
            <blockquote>
                <p>{{$hero->nickname}}</p>
            </blockquote>
            <p class="lead">Real name</p>
            <blockquote>
                <p>{{$hero->real_name}}</p>
            </blockquote>
            <p class="lead">Origin description</p>
            <blockquote>
                <p>{{$hero->origin_description}}</p>
            </blockquote>
            <p class="lead">Superpowers</p>
            <blockquote>
                <p>{{$hero->superpowers}}</p>
            </blockquote>
            <p class="lead">Catch phrase</p>
            <blockquote>
                <p>{{$hero->catch_phrase}}</p>
            </blockquote>
            <p><img src="/storage/app/public/img/{{$hero->img}}" alt="{{$hero->img}}" style="height:200px;width:auto;"></p>
        </div>
    </div>
</div>

@endsection