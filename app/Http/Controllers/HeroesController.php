<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroes;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HeroesController extends Controller
{
    public function index()
    {
        $myHero = DB::table('heroes')->paginate(5);

        return view('heroes.index', ['heroes'=>$myHero]);
    }

    public function create()
    {
        return view('heroes.create');
    }

    public function store(Request $request)
    {
        Heroes::create($request->all());
        
        return redirect()->route('heroes.index');
    }

    public function edit($id)
    {
        $myHero = Heroes::find($id);

        return view('heroes.edit', ['hero' => $myHero]);
    }

    public function update(Request $request, $id)
    {
        $myHero = Heroes::find($id);

        $myHero -> fill($request->all());
        $myHero -> save();

        return redirect()->route('heroes.index');
    }

    public function show($id)
    {
        $myHero = Heroes::find($id);

        return view('heroes.show', ['hero' => $myHero]);
    }

    public function destroy($id)
    {
        Heroes::find($id)->delete();

        return redirect()->route('heroes.index');
    }

    public function edit_img($id)
    {
        $myHero = Heroes::find($id);

        return view('heroes.edit_img', ['hero' => $myHero]);
    }

    public function update_img(Request $request, $id)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $myHero = Heroes::find($id);


        $imgName = $myHero->id.'_img'.time().'.'.request()->img->getClientOriginalExtension();

        $request->img->storeAs('img',$imgName);

        $myHero->img = $imgName;
        $myHero->save();

        return redirect()->route('heroes.index');

    }


}
