<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restoran_en;
use App\Models\Restoran_uz;
use App\Models\Restoran_chef_en;
use App\Models\Restoran_chef_uz;
use App\Models\Restoran_menu_uz;
use App\Models\Restoran_menu_en;
use App\Models\Restoran_teste_uz;
use App\Models\Restoran_teste_en;
use Illuminate\Support\Facades\DB;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t = app()->getLocale('lang');
        $news = DB::select('select * from restoran_' . $t . 's');
        $news4 = DB::select('select * from  restoran_teste_' . $t . 's');
        $news3 = DB::select('select * from  restoran_menu_' . $t . 's');
        $news2 = DB::select('select * from  restoran_chef_' . $t . 's');


        return view('index', ['slayd1' => $news, 'chefs' => $news2, 'menu' => $news3, 'teste' => $news4]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
