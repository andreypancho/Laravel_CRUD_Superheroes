@extends('layout')

@section('content')
<div class="container">
    <h3>My heroes</h3>
    <a href="{{ route('heroes.create') }}" class="btn btn-success">Create</a>
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Img</td>
                        <td>Actions</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($heroes as $hero)
                    <tr>
                        <td>{{$hero->id}}</td>
                        <td>{{$hero->nickname}}</td>
                        <td><img src="/storage/app/public/img/{{$hero->img}}"  width="auto" height="200px"></td>
                        <td>
                            <a href="{{ route('heroes.show', [$hero->id])}}">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                            <a href="{{ route('heroes.edit', [$hero->id])}}">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <a href="{{ route('heroes.edit_img', [$hero->id])}}">
                                <i class="glyphicon glyphicon-user"></i>
                            </a>

                            {!! Form::open(["method"=>"DELETE", "route"=>["heroes.destroy", $hero->id]]) !!}
                            <button onclick="return confirm('Are you sure?')">
                                <i class="glyphicon glyphicon-remove"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $heroes->links() }}
        </div>
    </div>
</div>

@endsection