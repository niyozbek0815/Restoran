@extends('layoutsss.app')
@section('a3')
class="active"

@endsection('a3')
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
                <a href="/admin/mijoz_en" class="btn btn-info mr-2">English table</a>
                <a href="/admin/mijoz" class="btn btn-info">Home</a>
            </form>
        </div>
    </nav>
    <div class="jadval m-3">
        <div class="card">

            <div class="card-body">
              <h4 class="font-bold text-[25px]">{{ $mijoz_en->h4 }}</h4>
              <p class="font-bolder text-[20px]">{{ $mijoz_en->span }}</p>
              <p class="font-bolder text-[17px]">{{ $mijoz_en->p }}</p>
              <a href="/admin/mijoz_en" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>



    </div>

@endsection('content')
