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

                <a href="/admin/slayd" class="btn btn-info mr-2">Uzbek table</a>
                <a href="/admin/slayd_add_en" class="btn btn-info mr-2">Add</a>


        </div>
    </nav>
    <div class="jadval mt-3">
        <table class="table table-striped table-dark jad" style="   width: 98%;
        margin: 0 auto;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Button name</th>
                    <th scope="col">Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($m_uz as $menu_uz)
                <tr>
                    <td scope="col">{{($m_uz->currentpage()-1)*$m_uz->perpage()+$loop->index+1 }}</td>
                    <td scope="col">{{ $menu_uz->title }}</td>
                    <td scope="col">{{ substr($menu_uz->text ,0,50)}}...</td>
                    <td scope="col">{{ $menu_uz->button }}</td>

                    <td scope="col">

                        <a href="/admin/slayd_uz_edit/{{ $menu_uz->id }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                       <a href="/admin/slayd_en_dell/{{ $menu_uz->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="div mt-2 ml-3">
            {{ $m_uz->links() }}
        </div>
    </div>

@endsection('content')
