<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('panel.logo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


// از ای استور برا ذخیره لوگو استفاده میکنیم
     public function store(Request $request)
     {

         $request->validate([
             'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);

         $image = $request->file('image');
         $originalName = $image->getClientOriginalName();
         $imageName = pathinfo($originalName, PATHINFO_FILENAME);
         $extension = $image->getClientOriginalExtension();


         $i = 1;
         while (file_exists(public_path('images/'.$imageName.'_'.$i.'.'.$extension))) {
             $i++;
         }
         $imageName = $imageName . '_' . $i;
         $image->move(public_path('images'), $imageName.'.'.$extension);


         $latestImage = $imageName.'.'.$extension;
         $this->savelogo($latestImage);

         return back()->with('success', 'لوگو سایت با موفقیت ذخیره شد.');
        }
public function titlestore(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $title = $request->input('title');
        DB::table('menus')->update(['title' => $title]);
        return back()->with('success', 'عنوان سایت با موفقیت ذخیره شد.');
}
public function savelogo($logo){
    DB::table('menus')->update(['logo' => $logo]);
}
public function welcome(){
$logo=Menu::first();
return view('welcomee',compact('logo'));

}
public function colorstore(Request $request){

        $request->validate([
            'color' => 'required|string',
        ]);
        $color = $request->input('color');
        DB::table('menus')->update(['color' => $color]);
        return back()->with('success', 'رنگ سایت با موفقیت ذخیره شد.');
    }
    public function show($page)
    {
       //
    }
    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
