<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
       $menus = Menu::all();
       return view('menus.index',compact('menus'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        try {
//            $data = $request->all();
//
//            $request->validate([
//                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
//            ]);
//
//            if ( $request->has('image'))
//            {
//                return 555;
//                $imageName = time().'.'.$request->image->extension();
//                $request->image->move('assets/images', $imageName);
//                $data['image'] = $imageName;
//
//            }

            $addMenu =new Menu();
            $addMenu->type =$request->name;
            $addMenu->details =$request->details;
            $addMenu->price =$request->price;
            $addMenu->image = $request->image;
            $addMenu->save();
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();

        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);


        }

    }


    public function show(Menu $menu)
    {
        //
    }


    public function edit(Menu $menu)
    {
        //
    }


    public function update(Request $request)
    {
        try {

            $updateMenu =Menu::find($request->id);
            $updateMenu->type =$request->name;
            $updateMenu->details =$request->details;
            $updateMenu->price =$request->price;
            $updateMenu->save();
            toastr()->success('Data has been updated successfully!');
            return redirect()->back();

        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);


        }

    }



    public function destroy(Request $request)
    {
        try {

            $deleteMenu =Menu::find($request->id);
            $deleteMenu->delete();
            toastr()->error('Data has been deleted successfully!');
            return redirect()->back();

        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);


        }
    }
}
