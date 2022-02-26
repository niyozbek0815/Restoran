@extends('layoutsss.app')
@section('a4')
class="active"

@endsection('a4')
@section('content')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <a class="navbar-brand" href="#">Menu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('/admin') }}">Admin<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="{{ asset('/admin') }}">Menu</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="/admin/slayd_en" class="btn btn-info mr-2">English table</a>
                <a href="/admin/slayd" class="btn btn-info">Home</a>
            </form>
        </div>
    </nav>
    <div class="jadval m-3">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="/admin/slayd_uz_save/{{ $slayd->id }}" enctype= "multipart/form-data" method="post" class="row ml-5 me-5  ">
            @csrf
            <input type="text" value="{{ $slayd->title }}" name="title" required class="form-control col-6 mb-2" placeholder="Title">
            <input type="text" value="{{ $slayd->text }}" name="text" required class="form-control col-6" placeholder="Content">
            <input type="text" value="{{ $slayd->button }}" name="button" required class="form-control mt-2 col-6 mb-2" placeholder="Button name">
            <input type="submit" value="Save" class="btn btn-info mt-3">

        </form>

    </div>

@endsection('content')
