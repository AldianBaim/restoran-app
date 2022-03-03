<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menus'] = Menu::all();
        return view('menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar')->getClientOriginalName();
            $request->gambar->storeAs('public/images', $img);
            Menu::create([
                'nama_menu' => $request->nama_menu,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'gambar' => $img,
            ]);
            return redirect('menu');
        }
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
        $data['menu'] = Menu::find($id);
        return view('menu.edit', $data);
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
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar')->getClientOriginalName();
            $request->gambar->storeAs('public/images', $img);
            Menu::where('id', $id)->update([
                'nama_menu' => $request->nama_menu,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'gambar' => $img,
            ]);
            return redirect('menu');
        }
        $menu = Menu::find($id);
        $menu->update($request->all());
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return back();
    }
}
