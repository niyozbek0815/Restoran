@extends('layoutsss.app')
@section('a2')
class="active"

@endsection('a2')
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
                <a href="/admin/xodim" class="btn btn-info mr-2">English table</a>
                <a href="/admin/chefs_en" class="btn btn-info">Home</a>
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

        <form action="/admin/chef_uz_update/{{ $chefe->id }}" enctype= "multipart/form-data" method="post" class="row ml-5 me-5  ">
            @csrf
            @method("PUT")
                <input type="text" value="{{ $chefe->name}}" name="name" required class="form-control col-6 mb-2" placeholder="Xodim ismini kiriting">
                <input type="text" name="unvon" value="{{ $chefe->unvon}}" required class="form-control col-6" placeholder="Xodim unvonini kiriting">
                <input type="text" name="title" value="{{ $chefe->title}}" id=""  required  class=" mt-2 form-control" placeholder="Xodim haqida maluotlarni  kiriting">
                <input type="text" value="{{ $chefe->insag_link}}" name="insag_link" required class="form-control mt-2 col-6 mb-2" placeholder="Xodim instagramini kiriting">
                <input type="text" name="watsap_link" value="{{ $chefe->watsap_link}}" required class="form-control col-6" placeholder="Xodim watsapini kiriting">
                <input type="file" name="img" required class="form-control mt-2">
                <input type="submit" value="Save" class="btn btn-info mt-3">

        </form>

    </div>

@endsection('content')
