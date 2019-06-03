@extends('layout')

@section('content')
<div class="container">
        <div class="row">
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>

            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">

            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded-circle" src="/storage/app/public/img/{{ $hero->img }}" width="auto" height="200px"/>
                    <!-- badge -->
                    <div class="rank-label-container">
                        <span class="label label-default rank-label">{{$hero->name}}</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <form action="{{ route('heroes.update_img', [$hero->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control-file" name="img" id="imgFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-danger">
                    <a href="{{ route('heroes.index') }}">Back</a> 
                </button>
            </form>
        </div>
    </div>
@endsection