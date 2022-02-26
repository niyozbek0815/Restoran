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
        $m_uz=Restoran_menu_uz::orderBy('created_at','desc')
        ->paginate(6);
        return view('menu.index',['m_uz'=>$m_uz]);

        }
    public function restoran()
    {
        $t = app()->getLocale('lang');
        $news = DB::select('select * from restoran_' . $t . 's  limit 3');
        $news4 = DB::select('select * from  restoran_teste_' . $t . 's where status=1 limit 3');
        $news3 = DB::select('select * from  restoran_menu_' . $t . 's limit 6');
        $news2 = DB::select('select * from  restoran_chef_' . $t . 's limit 3');


        return view('index', ['slayd1' => $news, 'chefs' => $news2, 'menu' => $news3, 'teste' => $news4]);

    }
    public function menu_en()
    {
        $m_en=Restoran_menu_en::orderBy('created_at','desc')
        ->paginate(6);

        return view('menu.menu_en',['m_en'=>$m_en]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.add_uz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'narx'=>'required',
            'tarkib'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:5048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=new Restoran_menu_uz;
        $r_uzb->name=$data['name'];
        $r_uzb->narx=$data['narx'];
        $r_uzb->tarkib=$data['tarkib'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect()->route("admin.index");

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
        $m_uz=Restoran_menu_uz::find($id);
        return view('menu.edit_uz',['m_uz'=>$m_uz]);
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

        $data=$request->validate([
            'name'=>'required',
            'narx'=>'required',
            'tarkib'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:5048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=Restoran_menu_uz::find($id);
        $r_uzb->name=$data['name'];
        $r_uzb->narx=$data['narx'];
        $r_uzb->tarkib=$data['tarkib'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect()->route("admin.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r_menu_uz=Restoran_menu_uz::find($id);
        $r_menu_uz->delete();
        return redirect()->route('admin.index');
    }
    public function menu_en_add(){

        return view('menu.add_en');
    }

    public function menu_en_story(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'narx'=>'required',
            'tarkib'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:5048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=new Restoran_menu_en;
        $r_uzb->name=$data['name'];
        $r_uzb->narx=$data['narx'];
        $r_uzb->tarkib=$data['tarkib'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect('/menu_en');

    }
    public function menu_en_dell($id)
    {
        $r_menu_en=Restoran_menu_en::find($id);
        $r_menu_en->delete();
        return redirect('/menu_en');
    }
    public function menu_en_edit($id){
        $m_uz=Restoran_menu_en::find($id);
        return view('menu.edit_en',['m_uz'=>$m_uz]);
    }
    public function menu_en_update(Request $request, $id)
    {

        $data=$request->validate([
            'name'=>'required',
            'narx'=>'required',
            'tarkib'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:5048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=Restoran_menu_en::find($id);
        $r_uzb->name=$data['name'];
        $r_uzb->narx=$data['narx'];
        $r_uzb->tarkib=$data['tarkib'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect('/menu_en');

    }
    public function chefs_uz(){
        $chefs_uz=Restoran_chef_uz::paginate(4);
        return view("xodim.index",['menu_ch_uz'=>$chefs_uz]);
    }
    public function chefs_en(){
        $chefs_uz=Restoran_chef_en::paginate(4);
        return view("xodim.chef_en",['menu_ch_en'=>$chefs_uz]);
    }
    public function chef_en_add(){
        return view('xodim.add_en');
    }
    public function chef_uz_add(){
        return view('xodim.add_uz');
    }
    public function chef_en_story(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'unvon'=>'required',
            'title'=>'required',
            'insag_link'=>'required',
            'watsap_link'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:10048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=new Restoran_chef_en;
        $r_uzb->name=$data['name'];
        $r_uzb->unvon=$data['unvon'];
        $r_uzb->title=$data['title'];
        $r_uzb->insag_link=$data['insag_link'];
        $r_uzb->watsap_link=$data['watsap_link'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect('/admin/chefs_en');
    }
    public function chef_uz_story(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'unvon'=>'required',
            'title'=>'required',
            'insag_link'=>'required',
            'watsap_link'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:10048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=new Restoran_chef_uz;
        $r_uzb->name=$data['name'];
        $r_uzb->unvon=$data['unvon'];
        $r_uzb->title=$data['title'];
        $r_uzb->insag_link=$data['insag_link'];
        $r_uzb->watsap_link=$data['watsap_link'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect('/admin/xodim');
    }
    public function chef_en_dell($id){
        $dell=Restoran_chef_en::find($id);
        $dell->delete();
        return redirect('admin/chefs_en');

    }
    public function chef_uz_dell($id){
        $dell=Restoran_chef_uz::find($id);
        $dell->delete();
        return redirect('admin/xodim');
    }
    public function chef_en_edit($id){
        $chef_en=Restoran_chef_en::find($id);
        return view('xodim.edit_en',['chefe'=>$chef_en]);
    }
    public function chef_uz_edit($id){
        $chef_en=Restoran_chef_uz::find($id);
        return view('xodim.edit_uz',['chefe'=>$chef_en]);
    }
    public function chefs_uz_update(Request $request, $id){
        $data=$request->validate([
            'name'=>'required',
            'unvon'=>'required',
            'title'=>'required',
            'insag_link'=>'required',
            'watsap_link'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:5048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=Restoran_chef_uz::find($id);
        $r_uzb->name=$data['name'];
        $r_uzb->unvon=$data['unvon'];
        $r_uzb->title=$data['title'];
        $r_uzb->insag_link=$data['insag_link'];
        $r_uzb->watsap_link=$data['watsap_link'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect('/admin/xodim');
    }
    public function chefs_en_update(Request $request , $id){
        $data=$request->validate([
            'name'=>'required',
            'unvon'=>'required',
            'title'=>'required',
            'insag_link'=>'required',
            'watsap_link'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:5048',
        ]);
        if($request->hasFile('img') ){
            $filemodel=$request->file('img');
            $fileNameWithExt=$filemodel->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext=$filemodel->getClientOriginalExtension();
            $fileNameToStory=$filename.'_'.time().".".$ext;
            $path=$filemodel->storeAs('public/dars14',$fileNameToStory);
        }else{
            $fileNameToStory="No_image.jpg";
        };
        $r_uzb=Restoran_chef_en::find($id);
        $r_uzb->name=$data['name'];
        $r_uzb->unvon=$data['unvon'];
        $r_uzb->title=$data['title'];
        $r_uzb->insag_link=$data['insag_link'];
        $r_uzb->watsap_link=$data['watsap_link'];
        $r_uzb->img=$fileNameToStory;
        $r_uzb->save();
        return redirect('/admin/chefs_en');
    }
    public function mijoz(){
        $m_uz=Restoran_teste_uz::orderBy("created_at","desc")->paginate(10);
        return view("mijoz.index",["m_uz"=>$m_uz]);
    }
    public function mijoz_en(){
        $m_uz=Restoran_teste_en::orderBy("created_at","desc")->paginate(10);
        return view("mijoz.mijoz_en",["m_uz"=>$m_uz]);
    }
    public function mijoz_show($id){
        $mijoz_uz=Restoran_teste_uz::find($id);
        return view("mijoz.show_uz",["mijoz_uz"=>$mijoz_uz]);
    }
    public function mijoz_en_show($id){
        $mijoz_en=Restoran_teste_en::find($id);
        return view("mijoz.show_en",["mijoz_en"=>$mijoz_en]);
    }
    public function mijoz_status($id){
        $m_s=Restoran_teste_uz::find($id);
        $m=$id;
        if($m_s->status===0){
            $m=1;
        }else{
            $m=0;
        }
        $m_s->status=$m;
        $m_s->save();
        return redirect()->back();
    }
    public function mijoz_en_status($id){
        $m_s=Restoran_teste_en::find($id);
        $m=$id;
        if($m_s->status===0){
            $m=1;
        }else{
            $m=0;
        }
        $m_s->status=$m;
        $m_s->save();
        return redirect()->back();

    }
    public function slayd_uz(){
        $m_uz=Restoran_uz::orderBy("created_at","DESC")->paginate(8);
        return view("slayd.index",["m_uz"=>$m_uz]);
    }
    public function slayd_en(){
        $m_uz=Restoran_en::orderBy("created_at","DESC")->paginate(8);
        return view("slayd.slayd_en",["m_uz"=>$m_uz]);
    }
    public function slayd_uz_add(){
        return view("slayd.add_uz");
    }
    public function slayd_en_add(){
        return view("slayd.add_en");
    }
    public function slayd_uz_story(Request $request){
        $data=$request->validate([
            'title'=>'required',
            'text'=>'required',
            'button'=>'required',
        ]);

        $r_uzb=new Restoran_uz;
        $r_uzb->title=$data['title'];
        $r_uzb->text=$data['text'];
        $r_uzb->button=$data['button'];

        $r_uzb->save();
        return redirect('/admin/slayd');
    }
    public function slayd_en_story(Request $request){
        $data=$request->validate([
            'title'=>'required',
            'text'=>'required',
            'button'=>'required',
        ]);

        $r_uzb=new Restoran_en;
        $r_uzb->title=$data['title'];
        $r_uzb->text=$data['text'];
        $r_uzb->button=$data['button'];

        $r_uzb->save();
        return redirect('/admin/slayd_en');
    }
    public function slayd_uz_dell($id){
        $slayd=Restoran_uz::find($id);
        $slayd->delete();
        return redirect()->back();
    }
    public function slayd_en_dell($id){
        $slayd=Restoran_en::find($id);
        $slayd->delete();
        return redirect()->back();
    }
    public function slayd_uz_edit($id){
        $slayd=Restoran_uz::find($id);
        return view("slayd.edit_uz",["slayd"=>$slayd]);

    }
    public function slayd_en_edit($id){
        $slayd=Restoran_en::find($id);
        return view("slayd.edit_en",["slayd"=>$slayd]);
    }


}
