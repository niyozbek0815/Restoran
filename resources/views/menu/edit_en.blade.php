@extends('layoutsss.app')
@section('a1')
class="active"

@endsection('a1')
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
                <a href="/menu_en" class="btn btn-info mr-2">English table</a>
                <a href="/admin" class="btn btn-info">Home</a>
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
        <form action="/admin/menu_en_update/{{ $m_uz->id }}" method="POST" enctype= "multipart/form-data"  class="row ml-5 me-5  ">
            @csrf

                <input type="text" name="name" value="{{ $m_uz->name }}" required class="form-control col-6 mb-2" placeholder="Taom nomini kiriting">
                <input type="number" name="narx" value="{{ $m_uz->narx }}" required class="form-control col-6" placeholder="Taom narxini kiriting">
                <input type="text" name="tarkib"  value="{{ $m_uz->tarkib }}" required  class=" mt-2 form-control" placeholder="Taom tarkibini kiriting">
                <input type="file" name="img" value="{{ $m_uz->img }}" required class="form-control mt-2">
                <input type="submit" value="Save" class="btn btn-info mt-3">

        </form>

    </div>

@endsection('content')
